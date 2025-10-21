<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index() {
        $usuarios = User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function create() {
        return view('admin.usuarios.create');
    }

    public function store(Request $request) {
//        $datos = $request->all();
//        return response ()->json($datos);
        $request->validate([
           'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|max:255|confirmed'
        ]);

        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request['password']);
        $usuario->save();

        return redirect()->route('admin.usuarios.index')
            ->with('mensaje', 'Registro exitoso')
            ->with('icono', 'success');
    }

    public function show($id) {
        $usuario = User::findOrFail($id);
        return view('admin.usuarios.show', compact('usuario'));
    }

    public function edit($id) {
        $usuario = User::findOrFail($id);
        return view('admin.usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'nullable|string|max:255|confirmed'
        ]);

        $usuario = User::find($id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;

        if ($request->filled('password')) {
            $usuario->password = Hash::make($request['password']);
        }

        $usuario->save();
        return redirect()->route('admin.usuarios.index')
            ->with('mensaje', 'Usuario actualizado')
            ->with('icono', 'success');
    }

    public function confirmDelete($id) {
        $usuario = User::findOrFail($id);
        return view('admin.usuarios.delete', compact('usuario'));
    }

//    public function destroy($id) {
//        $usuario = User::findOrFail($id);
//        $usuario->delete();
//
//        return redirect()->route('admin.usuarios.index')
//            ->with('mensaje', 'Usuario eliminado')
//            ->with('icono', 'success');
//    }

    public function destroy($id) {
        User::destroy($id);
        return redirect()->route('admin.usuarios.index')
            ->with('mensaje', 'Usuario eliminado correctamente')
            ->with('icono', 'success');
    }


}
