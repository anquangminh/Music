<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    // ------------------ [ User Dashboard Section ] ---------------------
    public function dashboard() {
        // check if user logged in
        if(Auth::check()) {
            return view('pages.dashboard');
        }
        return Redirect('user-login');
    }

     // -------------------- [ user registration view ] -------------
     public function userRegisterIndex() {
        return view('pages.register');
    }

    // --------------------- [ Register user ] ----------------------
    public function userPostRegistration(Request $request) {
        // validate form fields
        $request->validate([
            'username'        =>      'required',
            'email'             =>      'required|email|unique:users,email',
            'password'          =>      'required|min:6',
            'confirm_password'  =>      'required|same:password'
        ]);
        
        $inputArray      =           array(
            'username'          =>      $request->username,
            'email'             =>      $request->email,
            'password'          =>      Hash::make($request->password)
        );
        // Register user
        User::create($inputArray);

        $userCredentials = $request->only('email', 'password');
        Auth::attempt($userCredentials);
        return Redirect('dashboard');
    }


// -------------------- [ User login view ] -----------------------
    public function userLoginIndex() {
        if(Auth::check()) {
            return Redirect('dashboard');
        }
        return view('pages.login');
    }


// --------------------- [ User login Data] ---------------------
    public function userPostLogin(Request $request) {
        $request->validate([
            "email"           =>    "required|email",
            "password"        =>    "required|min:6"
        ]);
        $userCredentials = $request->only('email', 'password');
        // Check user using auth function
        if (Auth::attempt($userCredentials)) {
            return Redirect('dashboard');
        }
        else {
            return back()->withErrors('Whoops!Invalid username or password.');
        }
    }

    // --------------------- [ User login ] ---------------------
    public function userPostReset(Request $request) {
        return redirect()->intended('dashboard');
    }

    // ------------------- [ User logout function ] ----------------------
    public function logout(Request $request ) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('user-login');
    }
}
