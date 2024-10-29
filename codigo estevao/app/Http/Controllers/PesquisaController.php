<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesquisaController extends Controller
{
    // Exibe o primeiro formulário
    public function showForm()
    {
        return view('formulario');
    }

    // Processa o primeiro formulário e exibe o segundo
    public function processForm(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string',
            'idade' => 'required|integer',
            'sexo' => 'required|string',
            'dispositivo' => 'array',
            'experiencia' => 'required|string',
        ]);

        return view('formulario2', compact('data'));
    }

    // Exibe o resultado final com todos os dados
    public function showResult(Request $request)
    {
        $data = $request->all();
        return view('resultado', compact('data'));
    }
}
