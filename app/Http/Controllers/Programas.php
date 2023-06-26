<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Programa;

class Programas extends Controller
{
    public function index(){
        $programas = DB::table('programas')->get();
        return view('programas.listado', ['programas' => $programas]);
    }

    public function form_registro(){
        return view('programas.form_registro');
    }
    
    public function registrar(Request $r){
        $programa = new Programa();
        $programa->codprograma = $r->input('codigoPrograma');
        $programa->nomprograma = $r->input('nombrePrograma');
        $programa->facultad = $r->input('facultadPrograma');
        $programa->save();
        return redirect()->route('listadoProg');
    }

    public function eliminar($id){
        $programa = Programa::findOrFail($id);
        $programa->delete();
        return redirect()->route('listadoProg');
    }

}
