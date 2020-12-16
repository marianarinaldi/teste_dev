<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir uma Matrícula</title>
</head>
<body>
    <form action="{{ route('delete_enrollment', ['id' => $enrollment->id]) }}" method="POST">
        @csrf
        <label for="">Tem certeza que deseja excluir esta matrícula?</label>
        <input type="text" name="id" value="{{ $enrollment->id }}">        
        <button>Sim</button>
    </form>
</body>
</html>