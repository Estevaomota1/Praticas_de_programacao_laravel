<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações dos Dispositivos</title>
</head>
<body>
    <h1>Dados da Pesquisa</h1>
    <p>Nome: {{ $data['nome'] }}</p>
    <p>Idade: {{ $data['idade'] }}</p>
    <p>Sexo: {{ $data['sexo'] }}</p>
    <p>Experiência em Programação: {{ $data['experiencia'] }}</p>
    <p>Dispositivos: {{ implode(', ', $data['dispositivo'] ?? []) }}</p>

    <form action="{{ route('resultado') }}" method="POST">
        @csrf
        <input type="hidden" name="nome" value="{{ $data['nome'] }}">
        <input type="hidden" name="idade" value="{{ $data['idade'] }}">
        <input type="hidden" name="sexo" value="{{ $data['sexo'] }}">
        <input type="hidden" name="experiencia" value="{{ $data['experiencia'] }}">

        @foreach ($data['dispositivo'] ?? [] as $dispositivo)
            <input type="hidden" name="dispositivo[]" value="{{ $dispositivo }}">
            <label for="{{ $dispositivo }}_config">Configuração do {{ ucfirst($dispositivo) }}:</label><br>
            <textarea id="{{ $dispositivo }}_config" name="{{ $dispositivo }}_config" rows="4" cols="50"></textarea><br><br>
        @endforeach

        @if ($data['experiencia'] != 'nao_possui')
            <label for="linguagem">Selecione uma linguagem de programação:</label>
            <select id="linguagem" name="linguagem">
                <option value="C">C</option>
                <option value="C++">C++</option>
                <option value="Java">Java</option>
                <option value="PHP">PHP</option>
                <option value="Python">Python</option>
                <option value="Perl">Perl</option>
                <option value="Ruby">Ruby</option>
                <option value="outra">Outra</option>
            </select><br><br>
        @endif

        <button type="submit">Enviar Dados</button>
    </form>
</body>
</html>
