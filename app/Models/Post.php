<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
