<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class brigadaController extends Controller
{

    public function menu_brigada(){

        return view('encargado.brigadas.brigadas_menu');


    }


}
