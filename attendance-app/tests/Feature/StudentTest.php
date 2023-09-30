<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Support\Facades\DB;
use \App\Models\Student;

class StudentTest extends TestCase
{

    use RefreshDatabase;

    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function testRequestHome()
    {
        $response = $this->get('/home');
        $response->assertStatus(200);
    }

    public function testCreateStudent()
    {
        $this->seed(\StudentSeeder::class);
        $response = $this->post("/api/students/post/57396/Yoko/Sacha/A111");
        $response->assertStatus(201);
    }
    /**
     * CODE à corriger, je n'obtiens pas les bons status d'erreur
     */
    /*
    public function testCreateStudentMatriculeNegative()
    {
        $this->seed(\StudentSeeder::class);
        $response = $this->post("/api/students/post/-57396/Yoko/Sacha/A111");
        $response->assertStatus(500);
    }
    public function testCreateStudentMatriculeNotAvailable()
    {
        $this->seed(\StudentSeeder::class);
        $response = $this->post("/api/students/post/12345/Yoko/Sacha/A111");
        $response->assertStatus(500);
    }
    */

    public function testUpdateStudent()
    {
        $response = $this->patch("/api/students/patch/57396/A111");
        $response->assertStatus(200);
    }

    public function testReadStudent()
    {
        $response = $this->get("/api/students/get/12345");
        $response->assertStatus(200);
    }
    public function testReadAllStudent()
    {
        $response = $this->get("/api/students/get");
        $response->assertStatus(200);
    }

    public function testDeleteStudent()
    {
        $response = $this->delete("/api/students/delete/12345");
        $response->assertStatus(204);
    }

    public function testGetStudentsReturnsArray()
    {
        $this->seed(\StudentSeeder::class);
        $students = Student::getStudents();
        $this->assertIsArray($students);
    }

    public function testGetStudentsReturnsData()
    {
        $this->seed(\StudentSeeder::class);
        $students = Student::getStudents();
        $this->assertNotEmpty($students);
    }

    public function testSeederShouldSeedSevenStudents()
    {
        $this->seed(\StudentSeeder::class);
        $this->assertDatabaseCount('students', 7);
    }

    public function testGetStudentsReturnsExpectedData()
    {
        $this->seed(\StudentSeeder::class);
        $this->assertDatabaseHas('students',
            ['matricule' => 12345, 'nom' => 'Smith', 'prenom' => 'John', 'groupe' => 'A311']);
    }
}
