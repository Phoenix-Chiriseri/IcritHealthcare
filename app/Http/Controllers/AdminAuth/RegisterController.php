<?php

namespace App\Http\Controllers\AdminAuth;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Notifications\Notifiable;
use App\Notitications\WelcomeNotification;
use App\Mail\RegistrationConfirmation;
use App\Mail\NewUserCreatedNotification;

class RegisterController extends Controller
{
    public function create()
    {
        return view('admin.auth.register');
    }
    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:2',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'house' => 'required|min:5|max:255'
        ]);
        $user = User::create($attributes);
        // Send the email notification to the admin
        Notification::route('mail', 'itaineilchiriseri@gmail.com')->notify(new NewWelcomeNotification($user));
        // Log the user in (if needed)
        // auth()->login($user);
        
        // Redirect to a registration success page or another appropriate route
        return redirect('/register-success');
    }
}
