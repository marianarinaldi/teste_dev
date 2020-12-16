<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir um Curso</title>
</head>
<body>
    <form action="{{ route('delete_course', ['id' => $course->id]) }}" method="POST">
        @csrf
        <label for="">Tem certeza que deseja excluir este curso?</label>
        <input type="text" name="title" value="{{ $course->title }}">        
        <button>Sim</button>
    </form>
</body>
</html>