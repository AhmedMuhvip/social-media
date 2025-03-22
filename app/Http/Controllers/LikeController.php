<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store($id)
    {
        $like = Like::where('user_id', Auth::id())->where('post_id', $id)->first();

        if ($like) {
            $like->delete();

            return redirect()->back();
        }

        // Create the like
        Like::create([
            'user_id'     => Auth::id(),
            'post_id'     => $id,
            'likes_count' => 10, //TODO: Remove Filed From DB
        ]);

        return redirect()->back()->with('success', 'Post liked successfully.');
    }
}
