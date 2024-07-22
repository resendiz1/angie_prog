<?php

namespace App\Http\Controllers;

use App\Models\Extintor;
use Illuminate\Http\Request;





class extintoresController extends Controller
{
    
    public function menu_extintores(){

         $extintores = Extintor::all();
        


        return view('encargado.extintores_menu', compact('extintores'));

    }

    public function agregar_extintor(){

        
        request()->validate([

            'numero' => 'required',
            'planta' => 'required', //La planta se saca de la informacion de inicio de los usuarios
            'ubicacion' => 'required',
            'agente_extintor' => 'required',
            'capacidad' => 'required',
            'tipo' => 'required',
            'letrero' => 'required',
            'fecha_fabricacion' => 'required',
            'vencimiento_antiguedad' => 'required',
            'estado_actual' => 'required',
            'foto1' => 'required|max:4096',
            'foto2' => 'required|max:4096',
            'foto3' => 'required|max:4096'

        ]);

        //moviendo las imagenes de lugar
            $foto1 = request()->file('foto1')->store();
            $foto2 = request()->file('foto2')->store();
            $foto3 = request()->file('foto3')->store();
        //moviendo las imagenes de lugar




        $extintor = new Extintor();

        $extintor->numero = request('numero');
        $extintor->planta = request('planta');
        $extintor->ubicacion = request('ubicacion');
        $extintor->agente_extintor = request('agente_extintor');
        $extintor->capacidad = request('capacidad');
        $extintor->tipo = request('tipo');
        $extintor->ultima_recarga = request('ultima_recarga');
        $extintor->proxima_recarga= request('proxima_recarga');
        $extintor->ultimo_mantenimiento = request('ultimo_mantenimiento');
        $extintor->proximo_mantenimiento = request('proximo_mantenimiento');
        $extintor->ultima_prueba = request('ultima_prueba');
        $extintor->proxima_prueba = request('proxima_prueba');
        $extintor->letrero = request('letrero');
        $extintor->fecha_fabricacion = request('fecha_fabricacion');
        $extintor->vencimiento_antiguedad = request('vencimiento_antiguedad');
        $extintor->estado_actual = request('estado_actual');
        $extintor->observaciones = request('observaciones');
        $extintor->foto1 = $foto1;
        $extintor->foto2 = $foto2;
        $extintor->foto3 = $foto3;
        
        $extintor->save();

        return  back()->with('extintor_agregado', 'El extintor fue agregado');

    }


    public function eliminar_extintor($id){

        $extintor = Extintor::findOrFail($id);
        
        if($extintor->delete()){
            return back()->with('eliminado', 'El extintor fue eliminado');
        }

        else{

            return back()->with('error', 'Ocurrio un error al eliminar el extintor');
        }

    }


    public function editar_extintor($id){
        

        // request()->validate([

        //     'foto1' => 'max:4096',
        //     'foto2' => 'max:4096',
        //     'foto3' => 'max:4096'

        // ]);





        // //moviendo las imagenes de lugar
        //     $foto1 = request()->file('foto1')->store();
        //     $foto2 = request()->file('foto2')->store();
        //     $foto3 = request()->file('foto3')->store();
        // //moviendo las imagenes de lugar



        
        $extintor = Extintor::findOrFail($id);

        $extintor->numero = request('numero');
        $extintor->planta = request('planta');
        $extintor->ubicacion = request('ubicacion');
        $extintor->agente_extintor = request('agente_extintor');
        $extintor->capacidad = request('capacidad');
        $extintor->tipo = request('tipo');
        $extintor->ultima_recarga = request('ultima_recarga');
        $extintor->proxima_recarga= request('proxima_recarga');
        $extintor->ultimo_mantenimiento = request('ultimo_mantenimiento');
        $extintor->proximo_mantenimiento = request('proximo_mantenimiento');
        $extintor->ultima_prueba = request('ultima_prueba');
        $extintor->proxima_prueba = request('proxima_prueba');
        $extintor->letrero = request('letrero');
        $extintor->fecha_fabricacion = request('fecha_fabricacion');
        $extintor->vencimiento_antiguedad = request('vencimiento_antiguedad');
        $extintor->estado_actual = request('estado_actual');
        $extintor->observaciones = request('observaciones');
        // $extintor->foto1 = $foto1;
        // $extintor->foto2 = $foto2;
        // $extintor->foto3 = $foto3;

        $extintor->update();

        return back()->with('actualizado', 'El extintor fue actualizado');



    }


}