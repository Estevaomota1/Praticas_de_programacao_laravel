<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Pesquisa</title>
</head>
<body>
    <h1>Resultado da Pesquisa</h1>
    <p>Nome: {{ $data['nome'] }}</p>
    <p>Idade: {{ $data['idade'] }}</p>
    <p>Sexo: {{ $data['sexo'] }}</p>
    <p>Experiência em Programação: {{ $data['experiencia'] }}</p>

    @if (!empty($data['linguagem']))
        <p>Linguagem de Programação Preferida: {{ $data['linguagem'] }}</p>
    @endif

    @foreach ($data as $key => $value)
        @if (str_contains($key, '_config') && !empty($value))
            <p>Configuração do {{ ucfirst(explode('_', $key)[0]) }}: {{ $value }}</p>
        @endif
    @endforeach
</body>
</html>
