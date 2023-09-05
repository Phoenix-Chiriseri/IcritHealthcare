<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use App\Notifications\WelcomeNotification;

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

        //dd($attributes);
        $user = User::create($attributes);
        // Send the welcome notification to the admin
        $adminEmail = 'itai.c@b-e.digital'; // Replace with the admin's email address
        $user->notify(new WelcomeNotification($user));
        return redirect('/register-success');
    }
}
