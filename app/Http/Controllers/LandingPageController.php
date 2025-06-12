<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index() {
        return view("landing.index");
    }

    public function enviarContato(Request $request){
        $dados = $request->validate([
            "nome" => "required",
            "email" => "required|email"
        ]);
        return view("landing/obrigado", ["nome"=> $dados["nome"]]);
    }
}
