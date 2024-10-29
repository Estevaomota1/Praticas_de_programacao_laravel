<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProbController extends Controller
{
    // Exibe o formulário
    public function showForm()
    {
        return view('prob01_formulario'); // Aponta para a view prob01_formulario
    }

    // Processa o formulário
    public function processForm(Request $request)
    {
        // Valida o input
        $request->validate([
            'repeticoes' => 'required|integer|min:1',
        ]);

        // Obtém o número de repetições e cria a mensagem repetida
        $repeticoes = $request->input('repeticoes');
        $mensagem = str_repeat("Seja bem-vindo!!<br>", $repeticoes);

        // Retorna a view com a mensagem formatada
        return view('prob01_resultado', ['mensagem' => $mensagem]);  // Aponta para prob01_resultado
    }
}
