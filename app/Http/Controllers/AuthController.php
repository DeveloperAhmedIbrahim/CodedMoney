<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if($request->method() === "POST")
        {
            $request->validate([
                'email' => 'required|exists:users,email',
                'password' => 'required',
            ]);

            $user = User::whereEmail($request->email)->first();
            if(!Hash::check($request->password, $user->password))
            {
                return redirect()->back()->with('error', 'Incorrect password!');
            }

            Auth::login($user);

            return redirect()->route('exchange');
        }

        return view('login');
    }

    public function signUp(Request $request)
    {
        if($request->method() === "POST")
        {
            $request->validate([
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'required|confirmed',
            ]);

            $userId = (string) Str::uuid();

            $user = new User();
            $user->first_name = $request->firstName;
            $user->last_name = $request->lastName;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->paybis_uid = $userId;
            $user->save();

            return redirect()->route('login')->with('success', 'Your account created successfully!');
        }

        return view('sign-up');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
