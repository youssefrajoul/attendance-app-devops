<?php

namespace Tests\Browser;

use DOMDocument;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LessonTableTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     */
    public function test_allLessons_on_browser() : void
    {

        $this->seed(\LessonsTableSeeder::class);

        $this->browse(function (Browser $browser) {
            // Visit the page with the list of lessons
            

            $browser->visit('/lessons')
            ->assertSee('DON3');

            $value = $browser->attribute('id', 'perp');
            echo $value; 
                     
    
    });

    }
}

