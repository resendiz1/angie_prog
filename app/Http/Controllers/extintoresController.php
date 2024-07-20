<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class extintoresController extends Controller
{
    
    public function menu_extintores(){
        return view('encargado.extintores_menu');
    }

    public function agregar_extintor(){
        
        request()->validate([

            'numero' => 'required',
            'planta' => 'required', //La planta se saca de la informacion de inicio de los usuarios
            'ubicacion' => 'required',
            'agente_extintor' => 'required',
            'tipo' => 'required',
            'letrero' => 'required',
            'fecha_fabricacion' => 'required',
            'vencimietno_antiguedad' => 'required',
            'estado_actual' => 'required'

        ]);


        $extintor = 



    }


}
