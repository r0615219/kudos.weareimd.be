<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $user = \App\User::find(1);

            $browser->logInAs($user)
                ->visit('/home')
                ->assertSee('Compliments')
                ->assertSee('Users');
        });
    }
}