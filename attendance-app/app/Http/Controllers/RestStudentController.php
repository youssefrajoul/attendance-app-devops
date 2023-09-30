<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Student;

class RestStudentController extends Controller
{

    public static function validatedStudent($matricule)
    {
        return Student::checkStudentAvailable($matricule) && $matricule>0;
    }

    public static function createStudent($matricule, $nom, $prenom, $groupe)
    {
        $newStudent = [$matricule, $nom, $prenom, $groupe];

        if(!RestStudentController::validatedStudent($matricule)){
            return response()->json("Erreur");
        } else {
            Student::createStudent($newStudent);
            return response()->json(['message' => 'Student créée avec succès'], 201);
        }
        
    }

    public static function readStudent($matricule)
    {
        $student = Student::readStudent($matricule);
        if ($student==null){
            return response()->json("Erreur");
        } else {
            return response()->json($student, 200);
        }
    }

    public static function readAllStudent()
    {
        $students = Student::readAllStudent();
        if ($students==null){
            return response()->json("Erreur");
        } else {
            return response()->json($students, 200);
        }
    }

    public static function updateStudent($matricule, $groupe)
    {
        Student::updateStudent($matricule, $groupe);
        return response()->json(['message' => 'Student mise à jour avec succès'], 200);
    }

    public static function deleteStudent($matricule)
    {
        Student::deleteStudent($matricule);
        return response()->json(['message' => 'Student supprimé avec succès'], 204);
    }
}

/*
CREATE
 
http://127.0.0.1:8000/api/students/post/57396/Yoko/Sacha/E13

READ
 
http://127.0.0.1:8000/api/students/get/12345
 
UPDATE

http://127.0.0.1:8000/api/students/patch/12345/A111
http://127.0.0.1:8000/api/students/patch/12345/A311
DELETE

http://127.0.0.1:8000/api/students/delete/57396
*/