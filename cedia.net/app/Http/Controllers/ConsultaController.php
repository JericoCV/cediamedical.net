<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;

class ConsultaController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nombre_apellido'=>'required',
            'email'=>'required',
            'telefono'=>'required',
            'consulta'=>'required',
        ]);
        $consulta = new Consulta();
        $consulta->nombre_apellido = $request->nombre_apellido;
        $consulta->email = $request->email;
        $consulta->telefono = $request->telefono;
        $consulta->consulta = $request->consulta;
        $consulta->estado = "pendiente";

        $consulta->save();
        return redirect()->route('contactenos').'<script language="javascript">alert("Responderemos su consulta lo antes posible");</script>';
    }
    public static function show(){
        $consultas = Consulta::latest()->paginate(10);
        return $consultas;
    }
    public function update(Request $request){
        $consulta = Consulta::find($request->id);
        $consulta->estado = 'revisado';
        $consulta->save();
        return redirect()->route('AdminHome');
    }
}
