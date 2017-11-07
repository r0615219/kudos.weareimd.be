<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ComplimentsTest extends DuskTestCase
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

            $random = rand();

            $browser->logInAs($user)
                ->visit('/users/1')
                ->type('body', "La la laa x $random")
                ->press('submit')
                ->assertPathIs('/users/1')
                ->assertSee("La la laa x $random")
                ->visit('/compliments/received')
                ->assertSee("La la laa x $random");
        });
    }
}