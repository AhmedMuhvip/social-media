<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show(User $user)
    {
        if ($user->id !== \Auth::id()) {
            $posts = $user->post()->paginate(2);

            return view('profile.user_profile', [
                'user'  => $user,
                'posts' => $posts,
            ]);
        } else {
            return redirect('/profile');
        }
    }
}
