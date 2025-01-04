<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index()
    {
        // Get the authenticated user
        $user  = Auth::user();
        $posts = $user->post()->simplePaginate(1);

        // Pass the user data to the profile view
        return view('Profile.profile', compact('user', 'posts'));
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
