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
        "title" => "Home"

    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Elang Gilang Buana",
        "email" => "buana.183040043@mail.unpas.ac.id",
        "image" => "el.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"  => "judul-post-pertama",
            "author" => "Elang Gilang Buana",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro nulla quidem odit,
             esse consectetur, distinctio laudantium eligendi veniam corporis consequatur autem fugit 
             omnis tempora expedita culpa at earum corrupti, aliquid nobis vero explicabo repellendus saepe. 
             Recusandae illo assumenda aliquam quia velit fugit voluptate magnam doloremque provident 
             consequuntur tempore numquam neque iste facilis, aspernatur eaque labore magni dolor dolores.
             Autem hic ratione ea voluptate harum soluta corrupti accusamus ex inventore commodi a rerum 
             repellat pariatur reprehenderit, laborum iste? Nobis, ipsum reprehenderit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"  => "judul-post-kedua",
            "author" => "Hardi Adut",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis illum a voluptates,
            obcaecati nesciunt, dignissimos praesentium tenetur provident, itaque quas similique modi incidunt
            quidem blanditiis repudiandae architecto omnis quia esse! Ipsam nobis, officiis optio explicabo
            doloremque consequatur ipsum corrupti impedit eius, tempore sit velit, maiores nam perferendis? 
            Assumenda aspernatur architecto sequi inventore nihil illum nemo nisi optio eligendi, eos fugit 
            a facere laboriosam consectetur. Aliquam fuga atque odit corporis, at impedit asperiores esse
            incidunt consequatur fugiat fugit dicta quos deleniti earum ratione iure dolor voluptate?
            At, vero. Quod autem obcaecati sint quia animi illum officia neque, architecto,
            modi similique nobis."
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"  => "judul-post-pertama",
            "author" => "Elang Gilang Buana",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro nulla quidem odit,
             esse consectetur, distinctio laudantium eligendi veniam corporis consequatur autem fugit 
             omnis tempora expedita culpa at earum corrupti, aliquid nobis vero explicabo repellendus saepe. 
             Recusandae illo assumenda aliquam quia velit fugit voluptate magnam doloremque provident 
             consequuntur tempore numquam neque iste facilis, aspernatur eaque labore magni dolor dolores.
             Autem hic ratione ea voluptate harum soluta corrupti accusamus ex inventore commodi a rerum 
             repellat pariatur reprehenderit, laborum iste? Nobis, ipsum reprehenderit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"  => "judul-post-kedua",
            "author" => "Hardi Adut",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis illum a voluptates,
            obcaecati nesciunt, dignissimos praesentium tenetur provident, itaque quas similique modi incidunt
            quidem blanditiis repudiandae architecto omnis quia esse! Ipsam nobis, officiis optio explicabo
            doloremque consequatur ipsum corrupti impedit eius, tempore sit velit, maiores nam perferendis? 
            Assumenda aspernatur architecto sequi inventore nihil illum nemo nisi optio eligendi, eos fugit 
            a facere laboriosam consectetur. Aliquam fuga atque odit corporis, at impedit asperiores esse
            incidunt consequatur fugiat fugit dicta quos deleniti earum ratione iure dolor voluptate?
            At, vero. Quod autem obcaecati sint quia animi illum officia neque, architecto,
            modi similique nobis."
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post"  =>  $new_post
    ]);
});
