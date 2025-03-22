<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store($post_id)
    {
        request()->validate([
            'comment' => 'required',
        ]);

        Comment::create([
            'comment' => \request('comment'),
            'user_id' => \Auth::id(),
            'post_id' => $post_id,
        ]);

        return redirect()->back();
    }
}
