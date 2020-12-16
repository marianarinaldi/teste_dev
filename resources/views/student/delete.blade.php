<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir um Aluno</title>
</head>
<body>
    <form action="{{ route('delete_student', ['id' => $student->id]) }}" method="POST">
        @csrf
        <label for="">Tem certeza que deseja excluir este aluno?</label>
        <input type="text" name="name" value="{{ $student->name }}">        
        <button>Sim</button>
    </form>
</body>
</html>