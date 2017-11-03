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

        $user = User::All()->where('email', $providerUser->email);

        if($user == null){
            $newUser = new User;
            $newUser->name = $providerUser->name;
            $newUser->avatar = $providerUser->avatar;
            $newUser->avatar_original = $providerUser->avatar_original;
            $newUser->gender = $providerUser->user['gender'];
            $newUser->email = $providerUser->email;
            $newUser->password = 'true';
            $newUser->token = $providerUser->token;
            $newUser->save();
            return redirect('/home');
        } else {
            return redirect('/home');
        }

    }

}
