<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'date_of_birthday' => $request->date_of_birthday,
        ]);

        return "Aluno cadastrado com Sucesso!";
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);

        return view('student.show', ['student' => $student]);
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', ['student' => $student]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'date_of_birthday' => $request->date_of_birthday,
        ]);

        return "Aluno atualizado com Sucesso!";
    }

    public function delete($id)
    {
        $student = Student::findOrFail($id);
        return view('student.delete', ['student' => $student]);
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return "Aluno excluído com Sucesso!";
    }
}
