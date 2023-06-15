<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MedicoController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'nombre'=>'required',
            'apellidos'=>'required',
            'especialidad'=>'required',
            'foto'=>'required'
        ]);
        $medico = new Medico();
        $medico->nombre = $request->nombre;
        $medico->apellidos = $request->apellidos;
        $foto = $request->file('foto')->store('public/imagenes');
        $medico->foto = Storage::url($foto);
        $medico->especialidad = $request->especialidad;
        $medico->save();
        return redirect()->route('AdminProfesionals');
    }

    public static function show(){
        $medicos = Medico::orderBy("nombre")->paginate(10);
        return $medicos;
    }

    public function delete(Request $request){
        $medico = Medico::findOrFail($request->id);
        $medico->delete();
        return redirect()->route('AdminProfesionals');
    }
    public static function update(Request $request){
        $request->validate([
            'nombre'=>'required',
            'apellidos'=>'required',
            'especialidad'=>'required',
            'foto'=>'required'
        ]);
        $medico = Medico::findOrFail($request->id);
        $medico->nombre = $request->nombre;
        $medico->apellidos = $request->apellidos;
        $foto = $request->file('foto')->store('public/imagenes');
        $medico->foto = Storage::url($foto);
        $medico->especialidad = $request->especialidad;
        $medico->save();
        return redirect()->route('AdminProfesionals');
    }
}
