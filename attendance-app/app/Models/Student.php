<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;

    public static function getStudents()
    {
        $datas = DB::select("select * from students;");
        return $datas;
    }

    public static function addStudent($student)
    {
        DB::insert("insert into students (matricule, nom, prenom, groupe) values (?,?,?,?)", [$student->matricule,]);
    }
    public static function checkStudentAvailable($matricule)
    {
        $isAvailable = DB::select("select * from students where matricule = ?;", [$matricule]);
        return $isAvailable == null;
    }

    //////////////////////////////////////////////

    public static function createStudent($newStudent)
    {
        DB::insert("insert into students (matricule, nom, prenom, groupe) values (?,?,?,?)",
            [$newStudent[0], $newStudent[1], $newStudent[2], $newStudent[3]]
        );
    }

    public static function readStudent($matricule)
    {
        $data = DB::select("select * from students where matricule = ?;",
            [$matricule]
        );
        return $data;
    }
    public static function readAllStudent()
    {
        $data = DB::select("select * from students;");
        return $data;
    }

    public static function updateStudent($matricule, $groupe)
    {
        DB::update("update students set groupe = ? where matricule = ?;",
            [$groupe, $matricule]
        );
    }

    public static function deleteStudent($matricule)
    {
        DB::delete("delete from students where matricule = ?;",
            [$matricule]
        );
    }
}
