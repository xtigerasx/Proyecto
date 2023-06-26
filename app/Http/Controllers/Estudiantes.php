<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Estudiante;

class Estudiantes extends Controller
{
    public function index(){
        $estudiantes = DB::table('estudiantes')->get();
        return view('estudiantes.listado', ['estudiantes' => $estudiantes]);
    }

    public function form_registro(){
        return view('estudiantes.form_registro');
    }
    
    public function registrar(Request $r){
        $estudiante = new Estudiante();
        $estudiante->codestudiante = $r->input('codigoEstudiante');
        $estudiante->nomestudiante = $r->input('nombreEstudiante');
        $estudiante->edaestudiante = $r->input('edadEstudiante');
        $estudiante->fechestudiante = $r->input('fechEstudiante');
        $estudiante->sexestudiante = $r->input('sexEstudiante');
        $estudiante->ciudad = $r->input('ciudadEstudiante');
        $estudiante->barrio = $r->input('barrioEstudiante');
        $estudiante->programa = $r->input('programaEstudiante');
        $estudiante->save();
        return redirect()->route('listadoEst');
    }

    public function eliminar($id){
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('listadoEst');
    }

    public function form_edita($id){
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.form_edita',
            compact('estudiante'));
    }

    public function actualizar(Request $r, $id){
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->codestudiante = $r->input('codigoEstudiante');
        $estudiante->nomestudiante = $r->input('nombreEstudiante');
        $estudiante->edaestudiante = $r->input('edadEstudiante');
        $estudiante->fechestudiante = $r->input('fechEstudiante');
        $estudiante->sexestudiante = $r->input('sexEstudiante');
        $estudiante->save();
        return redirect()->route('listadoEst');
    }
}
