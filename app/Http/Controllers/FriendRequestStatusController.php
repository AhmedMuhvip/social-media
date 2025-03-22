<?php

namespace App\Http\Controllers;

use App\Models\RequestStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendRequestStatusController extends Controller
{

    public function index()
    {
        return view('friends-request');
    }

    public function store(User $id)
    {
        $senderId   = Auth::user()->id;
        $receiverId = $id->id;


        $existingRequest = RequestStatus::where(function ($query) use ($senderId, $receiverId) {
            $query->where('sending_id', $senderId)
                ->where('received_id', $receiverId);
        })->first();

        if ($existingRequest) {
            if ($existingRequest->status === 'accepted') {
                return redirect()->back()->with('message', 'You are already friends with this user.');
            }

            return redirect()->back()->with("message", 'You Already add this friend');
        }


        RequestStatus::create([
            'sending_id'  => $senderId,
            'received_id' => $receiverId,
            'status'      => 'pending',
        ]);

        return redirect()->back();
    }


    public function show()
    {
        $user = Auth::user();

        $receivedRequests = RequestStatus::where('received_id', $user->id)
            ->where('status', 'pending')
            ->with('sender') // Load sender details (name, last name, etc.)
            ->get();

        return view('friends-request', compact('receivedRequests'));
    }

}
