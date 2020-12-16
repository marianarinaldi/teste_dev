<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar uma Matrícula</title>
</head>
<body>
    <form action="{{ route('create_enrollment') }}" method="POST">
    @csrf
        <label for="">Curso</label>
        <select name="courses_id" id=""></select>
       
        <label for="">Aluno</label>
        <select name="students_id" id=""></select>
        
        <button>Salvar</button>
    </form>
</body>
</html>