<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blogs')->insert([
            'user_id' => 1,
            'category_id' => 1,
            'judul' => 'Judul Blog Pertama',
            'description' => 'Deskripsi singkat tentang blog pertama.',
            'text_link' => 'blog-pertama',
            'img_cover' => 'cover-blog-pertama.jpg',
            'content' => '<h2>blog pertama</h2><p>Isi konten dari blog pertama...</p>',
            'status' => 'published',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
