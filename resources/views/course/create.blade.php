<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar um Curso</title>
</head>
<body>
    <form action="{{ route('create_course') }}" method="POST">
        @csrf
        <label for="">Título</label>
        <input type="text" name="title">
        <label for="">Descrição</label>
        <input type="text" name="description">
        <button>Salvar</button>
    </form>
</body>
</html>