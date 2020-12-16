<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir um Aluno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
            Excluir um Aluno
            </div>
            <div class="card-body">
                <form action="{{ route('delete_student', ['id' => $student->id]) }}" method="POST">
                    @csrf
                    <label for="">Tem certeza que deseja excluir este aluno?</label>
                    <input type="text" name="name" value="{{ $student->name }}">        
                    <button>Sim</button>
                </form>
                </div>
        </div>
    </div>
</body>
</html>