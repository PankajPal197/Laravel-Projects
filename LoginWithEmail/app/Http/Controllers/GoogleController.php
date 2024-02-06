<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
    //
    public function loginWithGoogle() {
        return Socialite::driver('google')->redirect();
    }
    // public function callbackFromGoogle(){
    //     try{
    //         $user=Socialite::driver('google')->user();
    //         $is_user=User::where('email',$user->getEmail())->first();
    //         if($is_user){
    //             User::updateOrCreate(
    //                 [
    //                     'google_id'=>$user->getId()
    //                 ],
    //                 [
    //                     'name'=>$user->getName(),
    //                     'email'=>$user->getEmail(),
    //                     'password'=>Hash::make($user->getName().'@'.$user->getId())
    //                 ]
    //                 );
    //         }
    //         else{
    //             $saveUser=User::where('email',$user->getEmail())->update([
    //                 'google-id'=>$user->getId(),
    //             ]);
    //             $saveUser=User::where('email',$user->getEmail())->first();
    //         }
    //         Auth::loginUsingId($saveUser->id);
    //         return redirect()->route('home');
    //     }
    //     catch(\Throwable $th){
    //         throw $th;
    //     }
    // }
}