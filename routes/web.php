<?php

use App\Models\Post;
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
    return view('home', [
        "title" => "home",
        "gambar" => "ananda.jpg",
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "ananda",
        "gmail" => "anandamw@gmail.com",
        "gambar" => "ananda.jpg",
    ]);
});



Route::get('/posts', function () {

    return view('posts', [

        "title" => "blog",
        "gambar" => "ananda.jpg",
        "posts" =>  Post::all()
    ]);
});


Route::get('posts/{slug}', function ($slug) {


    // $new_post = [];

    // foreach ($blog_posts as $post) {
    //     if ($post['slug'] === $slug) {
    //         $new_post = $post;
    //     }
    // }


    return view('post', [
        "title" => "single post",
        "post" => Post::find($slug)

    ]);
});
