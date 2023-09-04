<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;

use App\Models\User;

use Illuminate\Support\Facades\Auth;



class GoogleController extends Controller
{
    public function loginUsingGoogle() {

        return Socialite::driver("google")->redirect();

    }

    public function callbackFromGoogle() {

        try{
            $google_user = Socialite::driver('google')->user();


            $user = User::where("google_id", $google_user->getId())->first();


            if(!$user) {

                $new_user = new User;

                $new_user->name = $google_user->getName();

                $new_user->email = $google_user->getEmail();

                $new_user->google_id = $google_user->getId();

                $new_user->role = "user";

                $new_user->save();

                Auth::login($new_user);

                return redirect()->intended("/");

            }
            else{

                Auth::login($user);

                return redirect()->intended("/");
            }

            dd($user);
        }
        catch(\Throwable $th){
            
            //throw $th;

            dd("Qualcosa è andato storto!" . $th->getMessage());
        }
    }
}
