<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

use \App\Models\Student;

class StudentController extends Controller
{
    public static function home()
    {
        $students = Student::getStudents();
        return view("form",["datas" => $students]);
    }

    public function store(Request $request)
    {
        Student::addStudent($request);
        
        return redirect('home');

    }

    public function delete($matricule)
    {
        Student::deleteStudent($matricule);

        return redirect('home');
    }

    public function showLessons()
    {
        $allLessons = Lesson::getAll();
        return view('lesson', ["allLessons" => $allLessons]);
    }

}
