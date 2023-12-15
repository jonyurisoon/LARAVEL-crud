<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function add()
    {
        return view('students.add');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'  => 'required|string|max:255',
            'grade' => 'required|numeric|min:0|max:5',
        ]);

        $newStudent = Student::create($data);

        return redirect(route('students.index'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student]);
    }

    public function update(Student $student, Request $request)
    {
        $data = $request->validate([
            'name'  => 'required|string|max:255',
            'grade' => 'required|numeric|min:0|max:5',
        ]);

        $student->update($data);

        return redirect(route('students.index'))->with('success', 'Student updated successfully');
    }

    public function delete(Student $student)
    {
        $student->delete();
        return redirect(route('students.index'))->with('success', 'Student deleted successfully');
    }
}
