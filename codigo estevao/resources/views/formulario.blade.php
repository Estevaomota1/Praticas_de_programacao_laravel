<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Usuário</title>
</head>
<body>
    <h1>Pesquisa de Usuário</h1>
    <form action="{{ route('formulario2') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>

        <label>Sexo:</label>
        <input type="radio" id="masculino" name="sexo" value="Masculino" required>
        <label for="masculino">Masculino</label>
        <input type="radio" id="feminino" name="sexo" value="Feminino" required>
        <label for="feminino">Feminino</label><br><br>

        <label>Dispositivos que possui:</label><br>
        <input type="checkbox" id="computador" name="dispositivo[]" value="computador">
        <label for="computador">Computador</label><br>
        <input type="checkbox" id="notebook" name="dispositivo[]" value="notebook">
        <label for="notebook">Notebook</label><br>
        <input type="checkbox" id="smartphone" name="dispositivo[]" value="smartphone">
        <label for="smartphone">Smartphone</label><br><br>

        <label for="experiencia">Experiência em Programação:</label>
        <select id="experiencia" name="experiencia">
            <option value="nao_possui">Não possui</option>
            <option value="iniciante">Iniciante</option>
            <option value="intermediario">Intermediário</option>
            <option value="avancado">Avançado</option>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
