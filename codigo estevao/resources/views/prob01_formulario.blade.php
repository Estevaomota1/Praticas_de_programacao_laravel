<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Repetição</title>
</head>
<body>
    <h1>Digite o número de repetições</h1>
    <form action="{{ url('/processar') }}" method="POST"> <!-- Ação corrigida -->
        @csrf
        <label for="repeticoes">Número de repetições:</label>
        <input type="number" name="repeticoes" id="repeticoes" min="1" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
