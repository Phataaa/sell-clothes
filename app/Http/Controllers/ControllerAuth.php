<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\order_detail;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

use Exception;

class ControllerAuth extends Controller
{
   
    public function showLogin() {
        return view('auth.login');
       
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            Session::put($credentials);
            if(Auth::user()->role == 'buyer') {
                
                return redirect()->route('slide.index');
            }
            if(Auth::user()->role == 'admin'){
                return redirect()->route('management_user');
            }
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }



    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback() {
        $user = Socialite::driver('google')->stateless()->user();
        $finduser = User::where('provider_id', $user->id)->first();
        if($finduser) {
           
            Auth::login($finduser);
            $session = $finduser->email;
            Session::put('email', $session);
            return redirect()->route('slide.index');
        }
        else {
            $newUser = new User;
            $newUser->provider_name = 'Google';
            $newUser->provider_id = $user->getId();
            $newUser->full_name = $user->getName();
            $newUser->user_name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->avatar = $user->getAvatar();
            $newUser->role = 'buyer';
            $newUser->save();

            Auth::login($newUser);
            $session = $newUser->email;
            Session::put('email', $session);
            return redirect()->route('index.home');
        }
    }
    public function Logout() {
        
        Session::flush();
        $Order_detail = order_detail::with('product')->whereNull('orders_id')->get();
        foreach($Order_detail as $order_detalil){
            $order_detalil->delete();
        }
        return redirect('/Login');
    }
}
