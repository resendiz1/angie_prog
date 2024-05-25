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
            'telefono_responsable' => 'required|min:10',
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
        $empresa->password = bcrypt(request('password'));
        $empresa->maps = request('maps');

        $empresa->save();

        return back()->with('empresa_agregada', '¡La empresa fue agregada!');



    }


    public function empresa_delete($id){

        $empresa = Empresa::findOrFail($id);
        $empresa->delete();
        return back()->with('eliminado','La empresa fue eliminada');

    } 

    public function empresa_editar($id){

        $empresa = Empresa::findOrFail($id);

        $password = bcrypt(request('password'));
        if($empresa->password == request('password')){
            $password = request('password');
        }



        $empresa->nombre = request('nombre');
        $empresa->direccion = request('direccion');
        $empresa->telefono = request('telefono');
        $empresa->nombre_responsable = request('nombre_responsable');
        $empresa->email = request('email'); 
        $empresa->password = $password;
        $empresa->maps = request('maps');
        $empresa->save();

        return back()->with('editado', 'Empresa '.request('nombre'). ' editada');

    }



    public function add_contratista(){
        return request();
    }



}
