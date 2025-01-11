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
//        if ( ! Auth::user()) {
//            return redirect('/login');
//        };

        $posts = Auth::check() ? Auth::user()->post()->latest()->paginate(2) : false;

//        $posts = Post::with('user')->latest()->simplePaginate('2');

        return view('welcome', [
            'user'  => Auth::user(),
            'posts' => $posts,
        ]);
    }
}


