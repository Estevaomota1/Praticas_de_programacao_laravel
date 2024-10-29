<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showCalculator()
    {
        return view('calculator'); // Aponta para a view calculator
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'first_operand' => 'required|numeric',
            'second_operand' => 'required|numeric',
            'operation' => 'required',
            'age' => 'nullable|numeric'
        ]);

        $firstOperand = $request->input('first_operand');
        $secondOperand = $request->input('second_operand');
        $operation = $request->input('operation');
        $age = $request->input('age', 0); // Usa 0 como padrão se não for fornecido

        switch ($operation) {
            case 'add':
                $result = $firstOperand + $secondOperand;
                break;
            case 'subtract':
                $result = $firstOperand - $secondOperand;
                break;
            case 'multiply':
                $result = $firstOperand * $secondOperand;
                break;
            case 'divide':
                $result = $firstOperand / $secondOperand;
                break;
            case 'add_age':
                $result = $firstOperand + $age;
                break;
            default:
                $result = 'Operação inválida';
                break;
        }

        return view('calculator', compact('result', 'firstOperand', 'secondOperand', 'age'));
    }
}
