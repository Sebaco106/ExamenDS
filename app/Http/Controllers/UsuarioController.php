<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $request = $request->all();
        $usuario = Usuario::create([
            'nombre'=>$params['nombre'],
            'direccion' =>$params['direccion'],
            'libro_id' =>$params['libro_id'],
            'usuario_id' =>$params['usuario_id'],
        ]);

        return $usuario;
    }

    public function index(Request $request)
    {
        $request = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $bibliotecas = Usuario::where('libro_id', $params['libro_id'])
       ->limit($params['size'])->get();

       return $usuario;
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);

        return $usuario;
    }

    public function update($id, Request $request)
    {
        $request = $request->all();
        Usuario::find($id)->update([
            'nombre'=>$params['nombre'],
            'direccion' =>$params['direccion'],
            'libro_id' =>$params['libro_id'],
            'usuario_id' =>$params['usuario_id'],
        ]);

        return 'Registro actualizado';
    }

    public function destroy($id)
    {
        Usuario::find($id)->delete();

        return 'Registro eliminado';
    }
}
