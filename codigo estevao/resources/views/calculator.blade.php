<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="{{ url('/calculate') }}" method="POST">
        @csrf
        <label for="first_operand">Digite um número:</label>
        <input type="number" name="first_operand" id="first_operand" value="{{ old('first_operand', $firstOperand ?? '') }}" required>

        <label for="second_operand">Digite o Segundo número:</label>
        <input type="number" name="second_operand" id="second_operand" value="{{ old('second_operand', $secondOperand ?? '') }}" required>

        <label for="operation">Digite a Operação:</label>
        <select name="operation" id="operation" required>
            <option value="add">Adicionar</option>
            <option value="subtract">Subtrair</option>
            <option value="multiply">Multiplicar</option>
            <option value="divide">Dividir</option>
            <option value="add_age">Adicionar idade do aluno</option>
        </select>

        <label for="age">Idade do Aluno:</label>
        <input type="number" name="age" id="age" value="{{ old('age', $age ?? '') }}">

        <button type="submit">Calcular</button>
    </form>

    @if(isset($result))
        <h2>Resultado: {{ $result }}</h2>
        @if(isset($age))
            <h3>A idade do aluno é: {{ $age }}</h3>
        @endif
    @endif
</body>
</html>
