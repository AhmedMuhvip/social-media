<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userProfileController extends Controller
{
    public function show(User $user)
    {
        $userP = $user;
        $posts = $user->post()->paginate(5);

//        dd($userP->image);

        return view('profile.user_profile', [
            'user'  => $userP,
            'posts' => $posts,
        ]);
    }
}
