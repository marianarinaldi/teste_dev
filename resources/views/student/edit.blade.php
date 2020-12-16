<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar um Aluno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
            Editar um Aluno
            </div>
            <div class="card-body">
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
            </div>
        </div>
    </div>
</body>
</html>