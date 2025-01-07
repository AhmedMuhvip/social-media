<?php

namespace App\Http\Controllers;

use App\Models\Post;

// Import the Post model
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Retrieve posts from the database (you can customize this as needed)
        $posts = Post::latest()->simplePaginate(5); // Example: Get all posts, ordered by most recent

        // Pass posts data to the welcome view
        return view('welcome', [
            'user'  => Auth::user(),
            'posts' => $posts,
        ]);
    }
}


