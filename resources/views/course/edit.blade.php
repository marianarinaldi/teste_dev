<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar um Curso</title>
</head>
<body>
    <form action="{{ route('edit_course', ['id' => $course->id]) }}" method="POST">
        @csrf
        <label for="">Título</label>
        <input type="text" name="title" value="{{ $course->title }}">
        <label for="">Descrição</label>
        <input type="text" name="description" value="{{ $course->description }}">
        <button>Salvar</button>
    </form>
</body>
</html>