<?php

namespace App\Models;


class Post
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug"  => "judul-post-pertama",
            "author" => "Elang Gilang Buana",
            "body" => "Ini adalah POST pertama, amet consectetur adipisicing elit. Porro nulla quidem odit,
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
            "body" => "Ini POST yang kedua, amet consectetur adipisicing elit. Veritatis illum a voluptates,
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
