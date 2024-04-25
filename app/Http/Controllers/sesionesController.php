<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class sesionesController extends Controller
{
    

    public function login(Request $request){
        


        $credentials = $request->only('email', 'password');



        if(Auth::guard('admins')->attempt($credentials)){   
            return view('admin.empresas_agregar');
        }


        return 'error';



    }


}
