<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{user:email}', function (\App\User $user) {
   var_dump($user);
});

//Route::get('/users/{user}/posts/{post}', function (\App\User $user, \App\Post $post) {
//    var_dump($post, $user);
//});

Route::get('/users/{user:email}/posts/{post:slug}', function (\App\User $user, \App\Post $post) {
    var_dump($post, $user);
});

Route::get('/component', function () {
    $name = 'Will';
    return view('component', [
        'name' => $name
    ]);
});
