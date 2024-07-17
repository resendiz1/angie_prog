<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class extintoresController extends Controller
{
    
    public function menu_extintores(){
        return view('encargado.extintores_menu');
    }


}
