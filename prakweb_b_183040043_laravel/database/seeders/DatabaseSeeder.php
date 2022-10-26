<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Elang Gilang Buana',
        //     'email' => 'elang@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Hardi Adut',
        //     'email' => 'adut@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est sapiente quis quisquam qui delectus quos nihil incidunt cumque.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est sapiente quis quisquam qui delectus quos nihil incidunt cumque explicabo quod voluptatibus similique perspiciatis vel quaerat amet excepturi error, ipsa nobis, quidem hic asperiores dolorem. Officiis amet reprehenderit dolorum voluptates, saepe explicabo rerum eligendi cumque placeat veniam assumenda delectus architecto esse ea beatae eius blanditiis vitae et! Corrupti labore earum esse, ex, excepturi tenetur ullam quia error, nostrum laboriosam adipisci doloremque maxime. Architecto fuga reprehenderit perferendis vel iste velit magnam accusamus, quidem ullam, praesentium impedit perspiciatis ipsam. Nam, tempore atque. Eius iusto ex pariatur enim numquam maiores, nostrum modi itaque fuga?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est sapiente quis quisquam qui delectus quos nihil incidunt cumque.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est sapiente quis quisquam qui delectus quos nihil incidunt cumque explicabo quod voluptatibus similique perspiciatis vel quaerat amet excepturi error, ipsa nobis, quidem hic asperiores dolorem. Officiis amet reprehenderit dolorum voluptates, saepe explicabo rerum eligendi cumque placeat veniam assumenda delectus architecto esse ea beatae eius blanditiis vitae et! Corrupti labore earum esse, ex, excepturi tenetur ullam quia error, nostrum laboriosam adipisci doloremque maxime. Architecto fuga reprehenderit perferendis vel iste velit magnam accusamus, quidem ullam, praesentium impedit perspiciatis ipsam. Nam, tempore atque. Eius iusto ex pariatur enim numquam maiores, nostrum modi itaque fuga?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est sapiente quis quisquam qui delectus quos nihil incidunt cumque.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est sapiente quis quisquam qui delectus quos nihil incidunt cumque explicabo quod voluptatibus similique perspiciatis vel quaerat amet excepturi error, ipsa nobis, quidem hic asperiores dolorem. Officiis amet reprehenderit dolorum voluptates, saepe explicabo rerum eligendi cumque placeat veniam assumenda delectus architecto esse ea beatae eius blanditiis vitae et! Corrupti labore earum esse, ex, excepturi tenetur ullam quia error, nostrum laboriosam adipisci doloremque maxime. Architecto fuga reprehenderit perferendis vel iste velit magnam accusamus, quidem ullam, praesentium impedit perspiciatis ipsam. Nam, tempore atque. Eius iusto ex pariatur enim numquam maiores, nostrum modi itaque fuga?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est sapiente quis quisquam qui delectus quos nihil incidunt cumque.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est sapiente quis quisquam qui delectus quos nihil incidunt cumque explicabo quod voluptatibus similique perspiciatis vel quaerat amet excepturi error, ipsa nobis, quidem hic asperiores dolorem. Officiis amet reprehenderit dolorum voluptates, saepe explicabo rerum eligendi cumque placeat veniam assumenda delectus architecto esse ea beatae eius blanditiis vitae et! Corrupti labore earum esse, ex, excepturi tenetur ullam quia error, nostrum laboriosam adipisci doloremque maxime. Architecto fuga reprehenderit perferendis vel iste velit magnam accusamus, quidem ullam, praesentium impedit perspiciatis ipsam. Nam, tempore atque. Eius iusto ex pariatur enim numquam maiores, nostrum modi itaque fuga?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
