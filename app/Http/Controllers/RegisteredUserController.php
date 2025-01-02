<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }

    public function store()
    {
        // Validate the input data
        $attributes = request()->validate([
            'fName'    => ['required'],
            'lName'    => ['required'],
            'email'    => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::min(8), 'confirmed'],
            'image'    => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);
        $imageName  = time().'.'.request()->image->extension();
        request()->image->move(public_path('images'), $imageName);
        $attributes['image'] = 'images/'.$imageName;
        $user                = User::create($attributes);
        Auth::login($user);

        return redirect('/');
    }


}
