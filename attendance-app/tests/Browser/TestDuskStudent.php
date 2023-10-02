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
       
        $this->browse(function (Browser $browser) {
            $browser->visit('/api/students/get')
                    ->assertSee("Azoz")
                    ->assertSee("John")
                    ->assertSee("A311")
                    ->assertSee("12345");
        });
    }
}
