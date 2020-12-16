<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar uma Matrícula</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="card">
            <div class="card-header text-center font-weight-bold">
            Editar uma Matrícula
            </div>
            <div class="card-body">
                <form action="{{ route('edit_enrollment', ['id' => $enrollment->id]) }}" method="POST">
                    @csrf
                    <label for="">Curso</label>
                    <select name="courses_id" id=""></select>
                    
                    <label for="">Aluno</label>
                    <input type="text" name="students_id" value="{{ $enrollment->student_id }}">
                    
                    <button>Salvar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>