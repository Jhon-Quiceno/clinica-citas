<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Doctor;
use App\Models\Consultorio;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultorios = Consultorio::all();
        $horarios = Horario::with('doctor', 'consultorio')->get();
        return view('admin.horarios.index', compact('horarios', 'consultorios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctores = Doctor::all();
        $consultorios = Consultorio::all();
        $horarios = Horario::with('doctor', 'consultorio')->get();
        return view('admin.horarios.create', compact('doctores', 'consultorios', 'horarios'));
    }

    public function cargar_datos_consultorios($id)
    {
        try{
            $horarios = Horario::with('doctor', 'consultorio')
                ->where('consultorio_id', $id)
                ->get();
            //print_r($horarios);
            return view('admin.horarios.cargar_datos_consultorios', compact('horarios'));
        }catch (\Exception $e){
            return response()->json(['mensaje' => 'Error']);
        }
    }

    public function cargar_doctores_consultorio($id)
    {
        try{
            // Obtener los doctores que tienen horarios en este consultorio
            $doctores = Doctor::whereHas('horarios', function($query) use ($id) {
                $query->where('consultorio_id', $id);
            })->get();

            return response()->json($doctores);
        }catch (\Exception $e){
            return response()->json(['error' => 'Error al cargar doctores'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dia' => 'required',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            'consultorio_id' => 'required|exists:consultorios,id',
            'doctor_id' => 'required|exists:doctors,id',
        ]);

        //verificar si el horario ya existe para ese dia y rango de horas y consultorio
        $horarioExistenteConsultorio = Horario::where('dia', $request->dia)
            ->where('consultorio_id', $request->consultorio_id)
            ->where(function ($query) use ($request) {
                $query->where(function ($query) use ($request) {
                    $query->where('hora_inicio', '>=', $request->hora_inicio)
                        ->where('hora_inicio', '<', $request->hora_fin);
                })
                    ->orWhere(function ($query) use ($request) {
                        $query->where('hora_fin', '>', $request->hora_inicio)
                            ->where('hora_fin', '<=', $request->hora_fin);
                    })
                    ->orWhere(function ($query) use ($request) {
                        $query->where('hora_inicio', '<', $request->hora_inicio)
                            ->where('hora_fin', '>', $request->hora_fin);
                    });
            })
            ->exists();

        if ($horarioExistenteConsultorio) {
            return redirect()->back()
                ->withInput()
                ->with('mensaje', 'Ya existe un horario que se superpone en este consultorio.')
                ->with('icono', 'error');
        }

        //verificar si el doctor ya tiene un horario en el mismo dia y hora
        $horarioExistenteDoctor = Horario::where('dia', $request->dia)
            ->where('doctor_id', $request->doctor_id)
            ->where(function ($query) use ($request) {
                $query->where(function ($query) use ($request) {
                    $query->where('hora_inicio', '>=', $request->hora_inicio)
                        ->where('hora_inicio', '<', $request->hora_fin);
                })
                    ->orWhere(function ($query) use ($request) {
                        $query->where('hora_fin', '>', $request->hora_inicio)
                            ->where('hora_fin', '<=', $request->hora_fin);
                    })
                    ->orWhere(function ($query) use ($request) {
                        $query->where('hora_inicio', '<', $request->hora_inicio)
                            ->where('hora_fin', '>', $request->hora_fin);
                    });
            })
            ->exists();

        if ($horarioExistenteDoctor) {
            return redirect()->back()
                ->withInput()
                ->with('mensaje', 'El doctor ya tiene un horario asignado en ese día y hora.')
                ->with('icono', 'error');
        }


        // Crear el horario
        Horario::create($request->all());

        return redirect()->route('admin.horarios.index')
            ->with('mensaje', 'Horario registrado exitosamente.')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $horario = Horario::find($id);
        return view('admin.horarios.show', compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $horario = Horario::find($id);
        $doctores = Doctor::all();
        $consultorios = Consultorio::all();
        $horarios = Horario::with('doctor', 'consultorio')->get();
        return view('admin.horarios.edit', compact('horario', 'doctores', 'consultorios', 'horarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $horario = Horario::find($id);

        $request->validate([
            'dia' => 'required',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            'consultorio_id' => 'required|exists:consultorios,id',
            'doctor_id' => 'required|exists:doctors,id',
        ]);

        //verificar si el horario ya existe para ese dia y rango de horas y consultorio (excluyendo el actual)
        $horarioExistenteConsultorio = Horario::where('dia', $request->dia)
            ->where('consultorio_id', $request->consultorio_id)
            ->where('id', '!=', $id)
            ->where(function ($query) use ($request) {
                $query->where(function ($query) use ($request) {
                    $query->where('hora_inicio', '>=', $request->hora_inicio)
                        ->where('hora_inicio', '<', $request->hora_fin);
                })
                    ->orWhere(function ($query) use ($request) {
                        $query->where('hora_fin', '>', $request->hora_inicio)
                            ->where('hora_fin', '<=', $request->hora_fin);
                    })
                    ->orWhere(function ($query) use ($request) {
                        $query->where('hora_inicio', '<', $request->hora_inicio)
                            ->where('hora_fin', '>', $request->hora_fin);
                    });
            })
            ->exists();

        if ($horarioExistenteConsultorio) {
            return redirect()->back()
                ->withInput()
                ->with('mensaje', 'Ya existe un horario que se superpone en este consultorio.')
                ->with('icono', 'error');
        }

        //verificar si el doctor ya tiene un horario en el mismo dia y hora (excluyendo el actual)
        $horarioExistenteDoctor = Horario::where('dia', $request->dia)
            ->where('doctor_id', $request->doctor_id)
            ->where('id', '!=', $id)
            ->where(function ($query) use ($request) {
                $query->where(function ($query) use ($request) {
                    $query->where('hora_inicio', '>=', $request->hora_inicio)
                        ->where('hora_inicio', '<', $request->hora_fin);
                })
                    ->orWhere(function ($query) use ($request) {
                        $query->where('hora_fin', '>', $request->hora_inicio)
                            ->where('hora_fin', '<=', $request->hora_fin);
                    })
                    ->orWhere(function ($query) use ($request) {
                        $query->where('hora_inicio', '<', $request->hora_inicio)
                            ->where('hora_fin', '>', $request->hora_fin);
                    });
            })
            ->exists();

        if ($horarioExistenteDoctor) {
            return redirect()->back()
                ->withInput()
                ->with('mensaje', 'El doctor ya tiene un horario asignado en ese día y hora.')
                ->with('icono', 'error');
        }

        // Actualizar el horario
        $horario->update($request->all());

        return redirect()->route('admin.horarios.index')
            ->with('mensaje', 'Horario actualizado exitosamente.')
            ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function confirmDelete($id)
    {
        $horario = Horario::with('doctor', 'consultorio')->findOrFail($id);
        return view('admin.horarios.delete', compact('horario'));
    }

    public function destroy($id)
    {
        $horario = Horario::find($id);
        $horario->delete();

        return redirect()->route('admin.horarios.index')
            ->with('mensaje', 'Horario eliminado exitosamente.')
            ->with('icono', 'success');
    }
}


