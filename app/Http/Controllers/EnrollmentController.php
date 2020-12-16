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
}
