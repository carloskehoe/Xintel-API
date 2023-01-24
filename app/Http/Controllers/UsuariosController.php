<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    
    public function index()
    {
        return Usuarios::all();
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'role_id' => 'required'
        ]);
        $usuario = new Usuarios;
        $usuario->first_name = $request->first_name;
        $usuario->last_name = $request->last_name;
        $usuario->role_id = $request->role_id;
        $usuario->save();

        return $usuario;
    }

    
    public function show(Usuarios $usuario)
    {
        //$usuario = Usuarios::find($id);
        return $usuario;
    }

    
    public function update(Request $request, Usuarios $usuario)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'role_id' => 'required'
        ]);
        $usuario->first_name = $request->first_name;
        $usuario->last_name = $request->last_name;
        $usuario->role_id = $request->role_id;
        $usuario->update();

        return $usuario;
    }

   
    public function destroy($id)
    {
        $usuario = Usuarios::find($id);

        if(is_null($usuario)){
            return response()->json('No se puede realizar la acción solicitada',404);
        }
        $usuario->delete();

        return response()->noContent();
    }
}
