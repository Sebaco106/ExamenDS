<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReseniaController extends Controller
{
    public function store(Request $request)
    {
        $request = $request->all();
        $resenia = Resenia::create([
            'nombre'=>$params['nombre'],
            'direccion' =>$params['direccion'],
            'libro_id' =>$params['libro_id'],
            'usuario_id' =>$params['usuario_id'],
        ]);

        return $resenia;
    }

    public function index(Request $request)
    {
        $request = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $bibliotecas = Resenia::where('libro_id', $params['libro_id'])
       ->limit($params['size'])->get();

       return $bibliotecas;
    }

    public function show($id)
    {
        $resenia = Resenia::find($id);

        return $resenia;
    }

    public function update($id, Request $request)
    {
        $request = $request->all();
        Resenia::find($id)->update([
            'nombre'=>$params['nombre'],
            'direccion' =>$params['direccion'],
            'libro_id' =>$params['libro_id'],
            'usuario_id' =>$params['usuario_id'],
        ]);

        return 'Registro actualizado';
    }

    public function destroy($id)
    {
        Resenia::find($id)->delete();

        return 'Registro eliminado';
    }
}
