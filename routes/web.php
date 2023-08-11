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



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ananda Maulana Wahyudi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, nemo nulla totam nihil necessitatibus illo. Aliquam eos temporibus sunt consequatur officia earum placeat magnam. Sunt maiores labore voluptates commodi molestias amet cumque, reprehenderit ab ipsa ipsum temporibus veniam. Accusantium quae tempore in aspernatur corporis voluptas corrupti earum autem, accusamus, aliquid tempora dolor exercitationem. Provident vitae sequi repudiandae nihil veritatis impedit eaque voluptas quia non minima, sit corrupti, corporis, sunt nulla fugiat. Vitae, veritatis placeat. Incidunt quis suscipit facere vero quidem.
            "
        ],
        [
            "title" => "judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "yaman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum corporis sed ea odio ut! Deserunt quasi enim commodi rem quia quam aliquid velit saepe vitae non impedit odio, fuga ab? Ipsum rerum quibusdam iure laboriosam recusandae quaerat facilis minus exercitationem. Quisquam aperiam quae consectetur ipsam doloremque? Consectetur tenetur porro facere numquam culpa cupiditate ex illum repudiandae quidem recusandae sequi mollitia atque, perferendis ea obcaecati excepturi dicta. Illo, maiores. Distinctio, aspernatur temporibus natus veritatis tempora et error vero perferendis voluptatum! Sint vitae aspernatur inventore. Tempore, assumenda sit odio commodi quas sint, excepturi delectus esse nesciunt temporibus minus consequuntur velit amet sed?
    
            "
        ]
    ];

    return view('posts', [

        "title" => "blog",
        "gambar" => "ananda.jpg",

        "posts" => $blog_posts
    ]);
});


Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ananda Maulana Wahyudi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, nemo nulla totam nihil necessitatibus illo. Aliquam eos temporibus sunt consequatur officia earum placeat magnam. Sunt maiores labore voluptates commodi molestias amet cumque, reprehenderit ab ipsa ipsum temporibus veniam. Accusantium quae tempore in aspernatur corporis voluptas corrupti earum autem, accusamus, aliquid tempora dolor exercitationem. Provident vitae sequi repudiandae nihil veritatis impedit eaque voluptas quia non minima, sit corrupti, corporis, sunt nulla fugiat. Vitae, veritatis placeat. Incidunt quis suscipit facere vero quidem.
            "
        ],
        [
            "title" => "judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "yaman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum corporis sed ea odio ut! Deserunt quasi enim commodi rem quia quam aliquid velit saepe vitae non impedit odio, fuga ab? Ipsum rerum quibusdam iure laboriosam recusandae quaerat facilis minus exercitationem. Quisquam aperiam quae consectetur ipsam doloremque? Consectetur tenetur porro facere numquam culpa cupiditate ex illum repudiandae quidem recusandae sequi mollitia atque, perferendis ea obcaecati excepturi dicta. Illo, maiores. Distinctio, aspernatur temporibus natus veritatis tempora et error vero perferendis voluptatum! Sint vitae aspernatur inventore. Tempore, assumenda sit odio commodi quas sint, excepturi delectus esse nesciunt temporibus minus consequuntur velit amet sed?
    
            "
        ]
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "single post",
        "post" => $new_post

    ]);
});
