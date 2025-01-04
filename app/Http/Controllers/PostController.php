<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store()
    {
        // Adjust the validation as per your requirement
        $details = request()->validate([
            'content' => 'required',
            'image'   => ['nullable', 'file', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        // Check if an image was uploaded
        if (request()->hasFile('image')) {
            $imageName = time().'.'.request()->image->extension();
            request()->image->move(public_path('p_images'), $imageName);
            $details['image'] = 'p_images/'.$imageName;
        }

        // Associate the post with the authenticated user
        $details['user_id'] = Auth::id(); // Get the authenticated user's ID

        // Create the post
        Post::create($details);

        // Redirect to the home page
        return redirect('/');
    }
}
