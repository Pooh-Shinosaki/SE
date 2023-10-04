<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        $students = Student::All();
        return view('students.index')->with('students',$students);
    }
}
