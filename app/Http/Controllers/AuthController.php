<?php

namespace App\Http\Controllers;

use App\Mail\VerificationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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

        return view('auth.login');
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

        return view('auth.sign-up');
    }

    public function forgotPassword(Request $request)
    {
        if($request->method() === "POST")
        {
            $request->validate([
                'email' => 'required|email'
            ]);

            $user = User::whereEmail($request->email)->first();
            
            if($user === null) 
            {
                Session::flash('_old_input.email', $request->email);
                Session::flash('error', 'The email you have entered is not exist in our record.');
                return redirect()->back();
            }

            $code = rand(1111,9999);
            $user->code = $code;
            $user->save();

            Mail::to($user->email)->send(new VerificationMail($user, "reset-password"));

            $id = Crypt::encrypt($user->id);

            Session::flash('success', 'The 4 digit code has been sent to you provided email address.');
            return redirect()->route('verifyCode', ['id' => $id]);
        }
        else 
        {
            return view('auth.forgot-password');
        }
    }

    public function verifyCode(Request $request, $id)
    {
        if($request->method() === "POST") 
        {
            $request->validate([
                'code' => 'required|min:4|max:4'
            ]);

            $id = Crypt::decrypt($id);

            $user = User::where([
                ['id', '=', $id],
                ['code', '=', $request->code],
            ])->first();

            if($user === null) 
            {
                Session::flash('_old_input.code', $request->code);
                Session::flash('error', 'The code you have entered is not correct.');
                return redirect()->back();
            }

            $id = Crypt::encrypt($user->id);

            Session::flash('success', 'Your email address verified!.');
            return redirect()->route('resetPassword', ['id' => $id]);
        }
        else 
        {
            return view('auth.verify-code');
        }
    }

    public function resetPassword(Request $request, $id)
    {
        if($request->method() === "POST")
        {
            $request->validate([
                'password' => 'required|confirmed|min:8'
            ]);

            $id = Crypt::decrypt($id);

            $user = User::find($id);

            if($user === null) 
            {
                Session::flash('error', 'Something went wrong please try again.');
                return redirect()->back();
            }


            $user->password = Hash::make($request->password);
            $user->save();

            Session::flash('success', 'Your password changed successfully!');
            return redirect()->route('login');
        }
        else 
        {
            return view('auth.reset-password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
