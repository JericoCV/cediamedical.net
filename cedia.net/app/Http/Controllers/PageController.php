<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\MedicoController;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke()
    {
        $medicos = MedicoController::show();
        return view('home')->with(compact('medicos'));
    }

    public function mision(){
        return view('mision');
    }

    public function cediamedical(){
        return view('cediamedical');
    }

    public function vision(){
        return view('vision');
    }

    public function valores(){
        return view('valores');
    }

    public function noticias(){
        return view('noticias');
    }

    public function medimagen(){
        return view('medimagen');
    }

    public function alerta(){
        return view('alerta');
    }

    public function centromedico(){
        return view('centromedico');
    }

    public function salud(){
        return view('salud');
    }
    public function contactenos(){
        return view('contactenos');
    }
    public function signup(){
        return view('signup');
    }
    public function AdminHome(){
        $consultas = ConsultaController::show();
        return view('AdminHome')->with(compact('consultas'));
    }
    public function AdminProfesionals(){
        $medicos = MedicoController::show();
        return view('AdminProfesionals')->with(compact('medicos'));
    }
    public function AdminSettings(){
        return view('AdminSettings');
    }
}
