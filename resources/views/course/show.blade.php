<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ver um Curso</title>
</head>
<body>    
    <label for="">Título</label>
    <input type="text" name="title" value="{{ $course->title }}">
    <label for="">Descrição</label>
    <input type="text" name="description" value="{{ $course->description }}">
</body>
</html>