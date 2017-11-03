<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */

    public function redirect()
    {
        return \Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        // when facebook call us a with token
        $providerUser = \Socialite::driver('facebook')->user();

        $user = new User();
        $user->name = $providerUser->name;
        $user->avatar = $providerUser->avatar;
        $user->avatar_original = $providerUser->avatar_original;
        $user->gender = $providerUser->user['gender'];
        $user->email = $providerUser->email;
        $user->password = 'true';
        $user->token = $providerUser->token;
        return redirect('/home');

    }

}
