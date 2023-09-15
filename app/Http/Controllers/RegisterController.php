<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use App\Mail\UserRegistrationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\UserVerify;
use Illuminate\Support\Str;

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
        $token = Str::random(64);
  
        UserVerify::create([
              'user_id' => $user->id, 
              'token' => $token
        ]);
  
        /*Mail::send('pages.emailVerification', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('username'.''.$user->username, 'email',"Email".''.$user->email,'password'.''.$user->password,'house'.''.$user->house);
          });*/

          Mail::send('pages.emailVerification', ['token' => $token], function($message) use($request, $user){
            $message->to($request->email);
            $message->subject('Email Verification Mail - Username: ' . $user->username . ', Email: ' . $user->email . ', Password: ' . $user->password . ', House: ' . $user->house);
         });
           return view('pages.emailVerification');
        }
    }
