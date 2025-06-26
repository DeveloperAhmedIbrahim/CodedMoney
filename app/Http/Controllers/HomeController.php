<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact(Request $request)
    {
        if($request->method() === "POST") {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);

            $data = $request->all();    
            $data["name"] = $request->first_name . ' ' . $request->last_name;
            Mail::to("siddiqui.ahmedibrahim@gmail.com")->send(new ContactMail($data));
            return redirect()->back()->with('success', "<strong>Hey, {$data["name"]}</strong><br>Your message has been sent. We will contact you soon.");

        }
        return view('contact');
    }

    public function faq()
    {
        return view('faq');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function termsOfUse()
    {
        return view('terms-of-use');
    }

    public function disclaimer()
    {
        return view('disclaimer');
    }

    public function exchange()
    {
        return view('exchange');
    }
}
