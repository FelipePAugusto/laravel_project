<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/laravel_project/public/')
                    ->clickLink('Log in')
                    ->type('email', 'livia@gmail.com')
                    ->type('password', '12345678')
                    ->click('button[type="submit"]')
                    ->assertSee('You are logged in')
                    ->assertSee('Laravel');
        });
    }
}
