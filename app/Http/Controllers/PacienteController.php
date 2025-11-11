<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('admin.pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'identificacion' => 'required|string|max:100|unique:pacientes',
            'eps' => 'required|string|max:100',
            'fecha_nacimiento' => 'required|string|max:100',
            'genero' => 'required|string|max:10',
            'telefono' => 'required|string|max:100',
            'correo' => 'required|string|email|max:100|unique:pacientes',
            'direccion' => 'required|string|max:255',
            'alergias' => 'required|string|max:255',
            'grupo_sanguineo' => 'required|string|max:3',
            'contacto_emergencia' => 'required|string|max:255',
            'observaciones' => 'nullable|string|max:255',
        ]);


        $paciente = new Paciente();
        $paciente->nombres = $request->nombres;
        $paciente->apellidos = $request->apellidos;
        $paciente->identificacion = $request->identificacion;
        $paciente->eps = $request->eps;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->genero = $request->genero;
        $paciente->telefono = $request->telefono;
        $paciente->correo = $request->correo;
        $paciente->direccion = $request->direccion;
        $paciente->grupo_sanguineo = $request->grupo_sanguineo;
        $paciente->alergias = $request->alergias;
        $paciente->contacto_emergencia = $request->contacto_emergencia;
        $paciente->observaciones = $request->observaciones;
        $paciente->save();

        return redirect()->route('admin.pacientes.index')
            ->with('mensaje', 'Paciente creado exitosamente.')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $paciente = Paciente::find($id);

        $request->validate([
            'nombres' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'identificacion' => 'required|string|max:100|unique:pacientes,identificacion,'.$paciente->id,
            'eps' => 'required|string|max:100',
            'fecha_nacimiento' => 'required|string|max:100',
            'genero' => 'required|string|max:10',
            'telefono' => 'required|string|max:100',
            'correo' => 'required|string|email|max:100|unique:pacientes,correo,'.$paciente->id,
            'direccion' => 'required|string|max:255',
            'alergias' => 'required|string|max:255',
            'grupo_sanguineo' => 'required|string|max:3',
            'contacto_emergencia' => 'required|string|max:255',
            'observaciones' => 'nullable|string|max:255',
        ]);

        $paciente->nombres = $request->nombres;
        $paciente->apellidos = $request->apellidos;
        $paciente->identificacion = $request->identificacion;
        $paciente->eps = $request->eps;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->genero = $request->genero;
        $paciente->telefono = $request->telefono;
        $paciente->correo = $request->correo;
        $paciente->direccion = $request->direccion;
        $paciente->grupo_sanguineo = $request->grupo_sanguineo;
        $paciente->alergias = $request->alergias;
        $paciente->contacto_emergencia = $request->contacto_emergencia;
        $paciente->observaciones = $request->observaciones;
        $paciente->save();

        return redirect()->route('admin.pacientes.index')
            ->with('mensaje', 'Paciente actualizado exitosamente.')
            ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function confirmDelete($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.delete', compact('paciente'));
    }

    public function destroy($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();

        return redirect()->route('admin.pacientes.index')
            ->with('mensaje', 'Paciente eliminado exitosamente.')
            ->with('icono', 'success');
    }
}

