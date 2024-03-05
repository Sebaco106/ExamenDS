<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function store(Request $request)
    {
        $request = $request->all();
        $biblioteca = Biblioteca::create([
            'nombre'=>$params['nombre'],
            'direccion' =>$params['direccion'],
            'libro_id' =>$params['libro_id'],
            'usuario_id' =>$params['usuario_id'],
        ]);

        return $biblioteca;
    }

    public function index(Request $request)
    {
        $request = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $bibliotecas = Biblioteca::where('libro_id', $params['libro_id'])
       ->limit($params['size'])->get();

       return $bibliotecas;
    }

    public function show($id)
    {
        $biblioteca = Biblioteca::find($id);

        return $biblioteca;
    }

    public function update($id, Request $request)
    {
        $request = $request->all();
        Biblioteca::find($id)->update([
            'nombre'=>$params['nombre'],
            'direccion' =>$params['direccion'],
            'libro_id' =>$params['libro_id'],
            'usuario_id' =>$params['usuario_id'],
        ]);

        return 'Registro actualizado';
    }

    public function destroy($id)
    {
        Biblioteca::find($id)->delete();

        return 'Registro eliminado';
    }
}
