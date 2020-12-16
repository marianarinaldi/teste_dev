<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastrar uma Matrícula</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Cadastrar uma Matrícula
            </div>
            <div class="card-body">
                <form action="{{ route('create_enrollment') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="">Curso</label>
                        <select name="courses_id" id=""></select>
                    </div>
                    <div class="form-group">
                        <label for="">Aluno</label>
                        <select name="students_id" id=""></select>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>