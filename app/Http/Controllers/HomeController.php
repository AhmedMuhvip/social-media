<?php

namespace App\Http\Controllers;

use App\Models\Post;

// Import the Post model
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    public function index()
    {
        $user  = Auth::user();
        $posts = $user->post;

        // Get the user's friends
        $friends = $user->friends;

        // Get the posts of the user's friends
        $friendsPosts = Post::whereIn('user_id', $friends->pluck('friend_id'))->get();

        // Merge and sort the posts
        $allPosts = $posts->merge($friendsPosts)->sortByDesc('created_at');

//        dd($posts);

        return view('welcome', [
            'user'  => $user,
            'posts' => $allPosts,
        ]);
    }
}


