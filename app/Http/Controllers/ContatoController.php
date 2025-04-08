<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviarEmail(Request $request){
        return back()->with('status', 'Mensagem enviada com sucesso!');
    }
}
