<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();

        return view('students.all', ['students'=>$students]);
    }

    public function showDetails() {
        $students = Student::all();

        return view('students.showDetails', ['students'=>$students]);
    }


    public function edit() {
        $students = Student::all();

        return view('students.edit', ['students'=>$students]);
    }

    public function delete() {
        $students = Student::all();

        return view('students.delete', ['students'=>$students]);
    }
}
