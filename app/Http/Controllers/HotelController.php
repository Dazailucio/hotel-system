<?php

namespace App\Http\Controllers;

class HotelController extends Controller
{
    public function index(){
        return view('index');
    }

    public function cadastro(){
        return view('cadastre_cliente');
    }
}
