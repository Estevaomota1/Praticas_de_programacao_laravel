<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Disciplinas</title>
</head>
<body>
    <h1>Cadastro de Disciplinas</h1>
    <form action="{{ url('/disciplinas') }}" method="POST">
        @csrf
        <label for="student_name">Nome do Aluno:</label>
        <input type="text" name="student_name" id="student_name" value="{{ old('student_name', $studentName ?? '') }}" required>

        <label for="discipline_name">Nome da Disciplina:</label>
        <input type="text" name="discipline_name" id="discipline_name" required>

        <label for="grade">Nota:</label>
        <input type="number" name="grade" id="grade" min="0" max="10" step="0.1" required>

        <button type="submit">Adicionar Disciplina</button>
    </form>

    <h2>Disciplinas Cadastradas</h2>
    <textarea rows="10" cols="50" readonly>
@if(isset($disciplineList))
{!! $disciplineList !!}
@endif
    </textarea>
</body>
</html>
