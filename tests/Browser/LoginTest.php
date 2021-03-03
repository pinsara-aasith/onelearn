<?php

namespace Tests\Browser;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use RefreshDatabase;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_see_login_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Email')
                ->assertSee('Password');
        });
    }

    public function test_login_using_email_and_password()
    {
        $user = User::factory()->create([
            'email' => 'aasithp@gmail.com',
            'password' => Hash::make('password'),
        ]);

        dd(User::first()->toArray());

        $this->browse(function (Browser $browser) use ($user) {
            $browser
                ->visit('/login')
                ->type('#email', $user->email)
                ->type('#password', 'password')->screenshot('before click')
                ->press('LOGIN')
                ->assertPathIs('/dashboard')->screenshot('after click');
        });

    }

//    public function test_cannot_login_for_already_authenticated_user()
//    {
//        $this->browse(function (Browser $browser) {
//
//            $browser->login()->visit('/login')->screenshot('h')
//                ->assertSee('Email')
//                ->assertSee('Password');
//        });
//    }
}
