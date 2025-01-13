<?php

namespace App\Http\Controllers;

use App\Models\Operador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class operadoresController extends Controller
{
    public function operadores_index(){

        $operadores = Operador::all();

        return view('encargado.operadores.gestionar_operadores', compact('operadores'));

    }


    public function agregar_operador(){

        $operador = new Operador();

        $operador->nombre = request('nombre');
        $operador->puesto= request('puesto');
        $operador->planta = Auth::guard('encargado')->user()->planta;
        $operador->telefono = request('telefono');
        $operador->contacto_emergencia = request('contacto_emergencia');
        $operador->enfermedad_cronica = request('enfermedad_cronica');

        $operador->save();


        return back()->with('agregado', 'El trabajador fue agregado!');
    }


}
