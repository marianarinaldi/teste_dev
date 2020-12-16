<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar um Curso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Cadastrar uma Curso
            </div>
            <div class="card-body">
                <form action="{{ route('create_course') }}" method="POST">
                    @csrf
                    <label for="">Título</label>
                    <input type="text" name="title" required>
                    <label for="">Descrição</label>
                    <input type="text" name="description">
                    <button>Salvar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>