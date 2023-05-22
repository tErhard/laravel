<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        // Перевірка та оновлення необхідних полів студента
        $student->name = $request->input('name');
        $student->course = $request->input('course');
        $student->specialty = $request->input('specialty');
        $student->save();

        return response()->json($student);
    }
}
