<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;

class EnrollmentController extends Controller
{
    public function create()
    {
        return view('enrollment.create');
    }

    public function store(Request $request)
    {
        Enrollment::create([
            'courses' => $request->courses,
            'students' => $request->students,
        ]);

        return "Matrícula cadastrada com Sucesso!";
    }

    public function show($id)
    {
        $enrollment = Enrollment::findOrFail($id);

        return view('enrollment.show', ['enrollment' => $enrollment]);
    }

    public function edit($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        return view('enrollment.edit', ['enrollment' => $enrollment]);
    }

    public function update(Request $request, $id)
    {
        $enrollment = Enrollment::findOrFail($id);

        $enrollment->update([
            'courses' => $request->courses,
            'students' => $request->students,
        ]);

        return "Matrícula atualizada com Sucesso!";
    }

    public function delete($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        return view('enrollment.delete', ['enrollment' => $enrollment]);
    }

    public function destroy($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->delete();

        return "Matrícula excluída com Sucesso!";
    }
}
