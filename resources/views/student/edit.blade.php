<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar um Aluno</title>
</head>
<body>
    <form action="{{ route('edit_student', ['id' => $student->id]) }}" method="POST">
        @csrf
        <label for="">Nome</label>
        <input type="text" name="name" value="{{ $student->name }}">
        <label for="">Email</label>
        <input type="text" name="email" value="{{ $student->email }}">
        <label for="">Data nascimento</label>
        <input type="date" name="date_of_birthday" value="{{ $student->date_of_birthday }}">
        <button>Salvar</button>
    </form>
</body>
</html>