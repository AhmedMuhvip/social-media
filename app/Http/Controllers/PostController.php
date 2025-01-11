<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
        // Adjust the validation as per your requirement
        $details = $request->validate([
            'content' => 'required',
            'image'   => ['nullable', 'file', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        // Check if an image was uploaded
        if ($request->hasFile('image')) {
            $details['type'] = 'txtImage';
            $imageName       = time().'.'.$request->image->extension();
            $request->image->move(public_path('p_images'), $imageName);
            $details['image'] = 'p_images/'.$imageName; // Store image path
        } else {
            $details['type']  = 'txt';
            $details['image'] = null;
        }

        // Associate the post with the authenticated user
        // Use Auth::id() to get the user ID
        Post::create([
            'content' => $details['content'],
            'image'   => $details['image'],  // Can be null if no image
            'type'    => $details['type'],
            'user_id' => Auth::id(), // Correctly use the user ID
        ]);

        // Redirect to the home page with a success message
        return redirect('/');
    }

    public function update(Post $post)
    {
        request()->validate([
            'content' => 'required',
        ]);

        $post->update([
            'content' => request('content'),
        ]);

        return redirect('/');
    }


    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/');

    }
}
