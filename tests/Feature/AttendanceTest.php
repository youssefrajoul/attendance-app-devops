<?php

namespace Tests\Feature;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AttendanceTest extends TestCase
{
    use RefreshDatabase;

    public function test_insert_student(): void
    {
        $response = $this->post('students', [
            'matricule' => 11111,
            'nom' => 'batmen',
            'prenom' => 'Affleck',
            'groupe' => 'F101',
        ]);

        $response->assertRedirect(route('home'));
        $this->assertCount(1, Student::getStudents());
    }



    public function test_insert_student_null(): void
    {
        $response = $this->post('students', [
            'matricule' => '',
            'nom' => '',
            'prenom' => '',
            'groupe' => '',
        ]);

        $response->assertSessionHasErrors(
            ['matricule',
            'nom',
            'prenom',
            'groupe']
        );
    }
}
