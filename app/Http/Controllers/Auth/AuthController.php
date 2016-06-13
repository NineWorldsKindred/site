<?php

namespace App\Http\Controllers\Auth;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\User;
use Validator;
use Laravel\Socialite\Contracts\Factory as Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/login/callback/';

    protected $socialite;

    public function __construct(Socialite $socialite){
        $this->socialite = $socialite;
    }

    public function logout() {
        \Auth::logout();

        return \Redirect::intended();
    }

    public function getSocialAuth($provider=null)
    {
        if(!config("services.$provider")) abort('404'); //just to handle providers that doesn't exist

        $this->redirectTo .= $provider;

        return $this->socialite->with($provider)->redirect();
    }


    public function getSocialAuthCallback($provider=null)
    {
        if($user = $this->socialite->with($provider)->user()){
            $authUser = $this->findOrCreateUser($user, $provider);

            // Log in
            \Auth::login($authUser, true);

            // Return
            return \Redirect::intended();
        }else{
            return 'something went wrong';
        }
    }

    protected function findOrCreateUser($user, $provider) {
        if($authUser = User::where('email',$user->getEmail())->orWhere("{$provider}_id", $user->getId())->first()) {
           return $authUser;
        }
        
        return User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            "{$provider})_id" => $user->getId()
        ]);
    }
}
