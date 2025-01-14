<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function show()
    {
        request()->validate([
            'searchContent' => 'required',
        ]);

        $searchContent = request('searchContent');

        $nameParts = explode(' ', $searchContent);

        if (count($nameParts) == 1) {
            $users = User::select('id', 'fName', 'lName', 'image')
                ->where('fName', 'LIKE', "%$searchContent%")
                ->get();
        } else {
            // If there are multiple name parts, search both fName and lName
            $users = User::select('id', 'fName', 'lName', 'image')
                ->where('fName', 'LIKE', "%{$nameParts[0]}%")
                ->where('lName', 'LIKE', "%{$nameParts[1]}%")
                ->get();
        }

        // Return the results to the view
        return view('search.searchResult', compact('users'));
    }
}
