<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;

class Profesores extends Controller
{
    public function index(){
        $profesores = DB::table('profesores')->get();
        return view('profesores.listado', ['profesores' => $profesores]);
    }

    public function form_registro(){
        return view('profesores.form_registro');
    }
    
    public function registrar(Request $r){
        $profesor = new Profesor();
        $profesor->codprofesor = $r->input('codigoProfesor');
        $profesor->nomprofesor = $r->input('nombreProfesor');
        $profesor->catprofesor = $r->input('categoriaProfesor');
        $profesor->save();
        return redirect()->route('listadoProf');
    }

    public function eliminar($id){
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return redirect()->route('listadoProf');
    }

}
