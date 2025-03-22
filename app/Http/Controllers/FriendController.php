<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function show()
    {
        $users = \Auth::user()->friends()->get();

        return view('my-friends', [
                'users' => $users,
        ]);

    }

    public function destroy(User $user, $id)
    {
        dd($user->fName, $id);
    }
}
