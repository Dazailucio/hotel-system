<?php

namespace App\Http\Controllers;

class ClienteController extends Controller
{
    public function index(){
        return view('index'); // Trocar para pagina inicial de exibição dos clientes
    }

    public function cadastro(){
        return view('cadastre_cliente');
    }
}
