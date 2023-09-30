<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Student;

class StudentController extends Controller
{
    public static function home()
    {
        $students = Student::getStudents();
        return view("home",["datas" => $students]);
    }
}
