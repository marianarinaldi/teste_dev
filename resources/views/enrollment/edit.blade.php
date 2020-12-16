<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar uma Matrícula</title>
</head>
<body>
    <form action="{{ route('edit_enrollment', ['id' => $enrollment->id]) }}" method="POST">
        @csrf
        <label for="">Curso</label>
        <select name="courses_id" id=""></select>
        
        <label for="">Aluno</label>
        <input type="text" name="students_id" value="{{ $enrollment->student_id }}">
        
        <button>Salvar</button>
    </form>
</body>
</html>