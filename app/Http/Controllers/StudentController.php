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

        return "Matrícula cadastrada com Sucesso!";
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);

        return view('student.show', ['student' => $student]);
    }
}
