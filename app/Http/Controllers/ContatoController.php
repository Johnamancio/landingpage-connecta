<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviarEmail(Request $request){
        return response()->json([
            'nome'=> $request->nome,
            'email'=>$request->email,
            'mensagem'=>$request->mensagem,
        ]);
    }
}
