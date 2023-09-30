<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TestDuskStudent extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->seed(\StudentSeeder::class);
        $this->assertDatabaseHas('students',
            ['matricule' => 12345, 'nom' => 'Smith', 'prenom' => 'John', 'groupe' => 'A311']);

        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                    ->assertSee("Smith")
                    ->assertSee("John")
                    ->assertSee("A311")
                    ->assertSee("12345");
        });
    }
}
