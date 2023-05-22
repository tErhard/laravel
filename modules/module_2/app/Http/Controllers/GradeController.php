<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function store(Request $request, $id)
    {
        // Перевірка ролі користувача
        $user = $request->user();
        if (!$user || !in_array($user->role, ['admin', 'editor'])) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Перевірка наявності студента
        $student = Student::find($id);
        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        // Валідація даних $request
        $validatedData = $request->validate([
            'subject' => 'required|string',
            'score' => 'required|integer|min:0|max:100',
            'date' => 'required|date',
        ]);

        // Створення оцінки
        $grade = new Grade;
        $grade->student_id = $id;
        $grade->subject = $validatedData['subject'];
        $grade->score = $validatedData['score'];
        $grade->date = $validatedData['date'];
        $grade->save();

        return response()->json($grade, 201);
    }
}
