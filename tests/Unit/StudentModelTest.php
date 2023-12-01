<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use \App\Models\Student;

class StudentModelTest extends TestCase
{
    
    use RefreshDatabase;

    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    /*
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
    */
}
