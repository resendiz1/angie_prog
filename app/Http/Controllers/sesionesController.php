<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class sesionesController extends Controller
{
    


    public function login(Request $request){
        // return request('rol');
        $credentials = $request->only('email', 'password');
        

//bloque de inicio de sesion del administrador
        if(request('rol') == 'Administrador' ){
    
            if(Auth::guard('admins')->attempt($credentials)){   
                return 'inicio exitoso como admin';
            }
            return back()->with('error_sesion_admin', 'Credenciales invalidas para administrador');

        }
//bloque de inicio de sesion del administrador





//bloque d inicio de sesion del encargado 
        if(request('rol') == 'Encargado' ){

            if(Auth::guard('encargado')->attempt($credentials)){
                return 'inicio de encargado exitoso!';
            }

            return back()->with('error_sesion_encargado', 'Credenciales invalidas para Encargado de SEH');

        }
//bloque d inicio de sesion del encargado 




//bloque de inicio de sesion de la empresa
        if(request('rol') == 'Contratista'){
            if(Auth::guard('contratista')){
                return 'inicio de contratista exitoso!';
            }
        }
        return back()->with('error_sesion_contratista', 'Credenciales invalidas para Contratistas');

//bloque de inicio de sesion de la empresa







    }


}
