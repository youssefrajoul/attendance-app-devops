<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;

    public static function getStudents(){
        return [];
        //return DB::select("select * from Students;");
    }

}
