<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar um Curso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
            Editar um Curso
            </div>
            <div class="card-body">
                <form action="{{ route('edit_course', ['id' => $course->id]) }}" method="POST">
                    @csrf
                    <label for="">Título</label>
                    <input type="text" name="title" required value="{{ $course->title }}">
                    <label for="">Descrição</label>
                    <input type="text" name="description" value="{{ $course->description }}">
                    <button>Salvar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>