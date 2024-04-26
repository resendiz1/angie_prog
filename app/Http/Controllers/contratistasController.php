<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contratistasController extends Controller
{
    
    public function showFormContratista(){

        $empresas = DB::select("SELECT * FROM empresas");
        return view('admin.empresas_agregar', compact('empresas'));

    }


    public function empresa_agregar(){


        //valiando datos
        request()->validate([

            'nombre' => 'required',
            'direccion' => 'required',
            'telefono_responsable' => 'required',
            'responsable' => 'required',
            'email_responsable' => 'required',
            'password' => 'required',
            'maps' => 'required',
         
            

        ]);


        
        $empresa = new Empresa();

        $empresa->nombre = request('nombre');
        $empresa->direccion = request('direccion');
        $empresa->telefono = request('telefono_responsable');
        $empresa->nombre_responsable = request('responsable');
        $empresa->email = request('email_responsable');
        $empresa->password = request('password');
        $empresa->maps = request('maps');

        $empresa->save();

        return back()->with('empresa_agregada', '¡La empresa fue agregada!');



    }



}
