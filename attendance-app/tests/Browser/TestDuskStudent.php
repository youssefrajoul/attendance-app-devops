<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TestDuskStudent extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     */
    public function test_allstudent_on_browser(): void
    {
       
        $this->seed(\StudentSeeder::class);
        
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                    ->assertSee("Azoz")
                    ->assertSee("John")
                    ->assertSee("A311")
                    ->assertSee("12345");
        });

    }
    
}
