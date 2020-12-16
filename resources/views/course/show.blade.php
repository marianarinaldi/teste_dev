<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ver um Curso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
            Curso
            </div>
            <div class="card-body">
                <label for="">Título</label>
                <input type="text" name="title" value="{{ $course->title }}">
                <label for="">Descrição</label>
                <input type="text" name="description" value="{{ $course->description }}">
            </div>
        </div>
    </div>
</body>
</html>