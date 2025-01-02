<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index()
    {
        // Get the authenticated user
        $user = auth()->user();

        // Pass the user data to the profile view
        return view('Profile.profile', compact('user'));
    }

    public function update()
    {
        request()->validate([
            'fName' => 'required',
            'lName' => 'required',
            'email' => 'required',
        ]);
        Auth::user()->update([
            'fName' => request('fName'),
            'lName' => request('lName'),
            'email' => request('email'),
        ]);

        return redirect('/profile');
    }

}
