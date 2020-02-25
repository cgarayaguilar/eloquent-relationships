<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'UserList');

Route::get('/profile/{user}', 'UserController')->name('profile');

Route::get('/level/{slug}', function ($slug) {
    $level  = \App\Level::where('slug', $slug)->first();
    $posts = $level->posts()->with('category', 'image', 'tags')->withCount('comments')->get();

    $videos = $level->videos()->with('category', 'image', 'tags')->withCount('comments')->get();

    return view('level', [
        'level' => $level,
        'posts' => $posts,
        'videos'=> $videos
    ]);
})->name('level');


