<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ver uma Matrícula</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Matrícula
        </div>
        <div class="card-body">
            <label for="">Curso</label>
            <select name="courses_id" id=""></select>

            <label for="">Aluno</label>
            <input type="text" name="students_id" value="{{ $enrollment->student_id }}">
            </div>
        </div>
    </div>
</body>
</html>