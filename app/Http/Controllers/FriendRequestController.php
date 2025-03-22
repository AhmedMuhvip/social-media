<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\RequestStatus;
use Illuminate\Http\Request;

class FriendRequestController extends Controller
{
    public function confirm($request_id)
    {
        $friendRequest = RequestStatus::where('request_id', '=', $request_id)->first();


        // Check if the friendship already exists
        $existingFriendship = Friend::where(function ($query) use ($friendRequest) {
            $query->where('user_id', $friendRequest->sending_id)
                ->where('friend_id', $friendRequest->received_id);
        })->orWhere(function ($query) use ($friendRequest) {
            $query->where('user_id', $friendRequest->received_id)
                ->where('friend_id', $friendRequest->sending_id);
        })->exists();

        if ($existingFriendship) {
            return response()->json(['message' => 'Friendship already exists'], 400);
        }

        // Create friendship records
        Friend::create([
            'user_id'   => $friendRequest->sending_id,
            'friend_id' => $friendRequest->received_id,
        ]);

        Friend::create([
            'user_id'   => $friendRequest->received_id,
            'friend_id' => $friendRequest->sending_id,
        ]);

        RequestStatus::where('request_id', '=', $request_id)->delete();

        return redirect()->back();
    }

    public function decline($request_id)
    {
        $friendRequest = RequestStatus::where('request_id', '=', $request_id)->first();
        RequestStatus::where('request_id', '=', $request_id)->delete();

        return redirect()->back();


    }
}

