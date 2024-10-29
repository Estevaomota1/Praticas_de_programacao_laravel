<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinasController extends Controller
{
    public function showForm(Request $request)
    {
        // Recupera o nome do aluno e a lista de disciplinas da sessão (caso exista)
        $studentName = session('student_name', '');
        $disciplineList = session('discipline_list', '');

        return view('prob02_form_disciplinas', compact('studentName', 'disciplineList'));
    }

    public function addDiscipline(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'student_name' => 'required|string|max:255',
            'discipline_name' => 'required|string|max:255',
            'grade' => 'required|numeric|min:0|max:10'
        ]);

        $studentName = $request->input('student_name');
        $disciplineName = $request->input('discipline_name');
        $grade = $request->input('grade');

        // Formata a nova linha da disciplina
        $newDisciplineEntry = "Disciplina: $disciplineName - Média: $grade\n";

        // Atualiza e armazena a lista de disciplinas na sessão
        $disciplineList = session('discipline_list', '') . $newDisciplineEntry;

        session([
            'student_name' => $studentName,
            'discipline_list' => $disciplineList
        ]);

        return redirect('/disciplinas')
            ->withInput()
            ->with(compact('studentName', 'disciplineList'));
    }
}
