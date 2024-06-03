<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sesionesController extends Controller
{
    


    public function login(Request $request){
        // return request('rol');
        $credentials = $request->only('email', 'password');
        $email = request('email');
        

//bloque de inicio de sesion del administrador
        if(request('rol') == 'administrador' ){
    
            if(Auth::guard('admins')->attempt($credentials)){   
                return 'inicio exitoso como admin';
            }
            return back()->with('error_sesion_admin', 'Credenciales invalidas para administrador');

        }
//bloque de inicio de sesion del administrador





//bloque d inicio de sesion del encargado 
        if(request('rol') == 'encargado' ){

            if(Auth::guard('encargado')->attempt($credentials)){
                return 'inicio de encargado exitoso!';
            }

            return back()->with('error_sesion_encargado', 'Credenciales invalidas para Encargado de SEH');

        }
//bloque d inicio de sesion del encargado 




//bloque de inicio de sesion de la empresa
        if(request('rol') == 'empresa'){

            if(Auth::guard('empresa')->attempt($credentials)){

                $empresa = Auth::guard('empresa')->user()->id;

                $contratistas = DB::select("SELECT*FROM contratistas WHERE id_empresa LIKE  '$empresa'");   
                
                  return redirect()->route('perfil.contratistas');
                //  return view('contratistas.perfil', compact('empresa')); 
            }

        }

        return back()->with('error_sesion_contratista', 'Credenciales invalidas para Contratistas');

//bloque de inicio de sesion de la empresa


    }





    public function perfil_contratistas(){
        return view('contratistas.perfil');
    }





}
