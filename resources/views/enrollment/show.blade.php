<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ver uma Matrícula</title>
</head>
<body>
    <label for="">Curso</label>
    <select name="courses_id" id=""></select>
    
    <label for="">Aluno</label>
    <input type="text" name="students_id" value="{{ $enrollment->student_id }}">
</body>
</html>