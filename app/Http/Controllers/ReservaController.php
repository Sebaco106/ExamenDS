<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function store(Request $request)
    {
        $request = $request->all();
        $reserva = Reserva::create([
            'nombre'=>$params['nombre'],
            'direccion' =>$params['direccion'],
            'libro_id' =>$params['libro_id'],
            'usuario_id' =>$params['usuario_id'],
        ]);

        return $reserva;
    }

    public function index(Request $request)
    {
        $request = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $bibliotecas = Reserva::where('libro_id', $params['libro_id'])
       ->limit($params['size'])->get();

       return $bibliotecas;
    }

    public function show($id)
    {
        $reserva = Reserva::find($id);

        return $reserva;
    }

    public function update($id, Request $request)
    {
        $request = $request->all();
        Reserva::find($id)->update([
            'nombre'=>$params['nombre'],
            'direccion' =>$params['direccion'],
            'libro_id' =>$params['libro_id'],
            'usuario_id' =>$params['usuario_id'],
        ]);

        return 'Registro actualizado';
    }

    public function destroy($id)
    {
        Reserva::find($id)->delete();

        return 'Registro eliminado';
    }
}
