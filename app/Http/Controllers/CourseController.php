<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        Course::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return "Curso cadastrado com Sucesso!";
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);

        return view('course.show', ['course' => $course]);
    }
}
