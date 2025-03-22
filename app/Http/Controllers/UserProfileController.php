<?php

namespace App\Http\Controllers;

use App\FriendStatus;
use App\Models\Friend;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RequestStatus;


class UserProfileController extends Controller
{

    public function show(User $user)
    {
//        $friendShipStatus=RequestStatus::where()
        // Redirect to the authenticated user's profile if the user IDs match
        if ($user->id === \Auth::id()) {
            return redirect('/profile');
        }

        $friends_Status = Friend::where(function ($query) use ($user) {
            $query->where('user_id', \Auth::id())
                    ->where('friend_id', $user->id);
        })
                ->orWhere(function ($query) use ($user) {
                    $query->where('user_id', $user->id)
                            ->where('friend_id', \Auth::id());
                })
                ->exists();


        // Fetch posts for the user with like counts, comments, and user data
        $posts = Post::where('user_id', $user->id)
                ->with('user', 'comments.user', 'likes')
                ->withCount('likes') // Add like count
                ->paginate(10);

        // Fetch friends of the user
        $friends = $user->friends()->get();

        // Pass data to the view
        return view('profile.user_profile', [
                'user'          => $user,
                'posts'         => $posts,
                'friends'       => $friends,
                'friend_status' => $friends_Status ? FriendStatus::friends->value : false,
        ]);
    }
}

