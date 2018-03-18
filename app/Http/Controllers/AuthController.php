<?php

namespace App\Http\Controllers;

use Socialite;
use Auth;
use App\User;
use App\UserDetail;


class AuthController extends Controller
{

  
     /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToFacebook()
    {   
        
        if(Auth::check()){
            $userDetail= UserDetail::where('facebook_id',Auth::user()->facebook_id)->first();
            if($userDetail) {
                return redirect()->route('team');
            }else {
                return redirect()->route('register');
            }
        }
        
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
       
        $authUser = $this->findOrCreateUser($user);
        
        Auth::login($authUser, true);
        Auth::guard('api')->user();
        

        $userDetail= UserDetail::where('facebook_id', $user->id)->first();
        if($userDetail) {
             return redirect()->route('team');
        }else {
              return redirect()->route('register');
        }
    }


    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
     public function findOrCreateUser($user)
     {
        $authUser = User::where('facebook_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        $user = User::create([
            'name'     => $user->name,
            'email'    => $user->email,   
            'facebook_id' => $user->id
        ]);       

        return $user;
     }
}