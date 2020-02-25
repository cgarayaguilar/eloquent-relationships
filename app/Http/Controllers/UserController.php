<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(User $user)
    {
        $posts = $user->posts()
            ->with('category', 'image', 'tags')
            ->withCount('comments')
            ->get();

        $videos = $user->videos()
            ->with('category', 'image', 'tags')
            ->withCount('comments')
            ->get();

        return view('profile', [
            'user' => $user,
            'posts' => $posts,
            'videos'=> $videos,
        ]);
    }
}
