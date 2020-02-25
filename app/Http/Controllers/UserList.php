<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserList extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        $users = User::with('level', 'location', 'profile')->get();

        return view('welcome', compact('users'));
    }
}
