<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['matricule' => 52445, 'nom' => 'Azoz', 'prenom' => 'Soliman', 'groupe' => 'E13'],
            ['matricule' => 12345, 'nom' => 'Smith', 'prenom' => 'John', 'groupe' => 'A311'],
            ['matricule' => 67890, 'nom' => 'Johnson', 'prenom' => 'Emily', 'groupe' => 'A123'],
            ['matricule' => 23456, 'nom' => 'Williams', 'prenom' => 'Michael', 'groupe' => 'B122'],
            ['matricule' => 78901, 'nom' => 'Brown', 'prenom' => 'Sarah', 'groupe' => 'D221'],
            ['matricule' => 34567, 'nom' => 'Jones', 'prenom' => 'David', 'groupe' => 'E11'],
            ['matricule' => 89012, 'nom' => 'Davis', 'prenom' => 'Lisa', 'groupe' => 'A121'],
        ];

        // Insert the data into the 'students' table
        DB::table('students')->insert($data);
    }

}
