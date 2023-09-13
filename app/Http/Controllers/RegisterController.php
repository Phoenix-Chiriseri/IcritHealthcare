<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use App\Mail\UserRegistrationMail;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:2',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'house' => 'required|min:5|max:255'
        ]);

        $user = User::create($attributes);
        //Send the welcome notification to the admin
        //Mail::to('itaneilchiriseri@gmail.com')->send(new UserRegistrationMail($user));
        return redirect('/dashboard');
    }
}
