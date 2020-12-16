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

    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('course.edit', ['course' => $course]);
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $course->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return "Curso atualizado com Sucesso!";
    }

    public function delete($id)
    {
        $course = Course::findOrFail($id);

        return view('course.delete', ['course' => $course]);
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return "Curso excluído com Sucesso!";
    }
}
