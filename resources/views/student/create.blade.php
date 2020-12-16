<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar um Aluno</title>
</head>
<body>
    <form action="{{ route('create_student') }}" method="POST">
    @csrf
        <label for="">Nome</label>
        <input type="text" name="name">
        <label for="">Email</label>
        <input type="text" name="email">
        <label for="">Data nascimento</label>
        <input type="date" name="date_of_birthday">
        <button>Salvar</button>
    </form>
</body>
</html>