<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Grade;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        return response()->json($student);
    }
}

class GradeController extends Controller
{
    public function store(Request $request, $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        // Валідація даних $request

        $grade = new Grade;
        $grade->student_id = $id;
        $grade->subject = $request->input('subject');
        $grade->score = $request->input('score');
        $grade->date = $request->input('date');
        $grade->save();

        return response()->json($grade, 201);
    }
}
