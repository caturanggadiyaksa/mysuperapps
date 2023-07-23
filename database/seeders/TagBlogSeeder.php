<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TagBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tagData = [
            [
                'blog_id' => 1, // Replace with the appropriate blog ID
                'name_tag' => 'Tag 1',
                'description' => 'Description for Tag 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_id' => 2, // Replace with the appropriate blog ID
                'name_tag' => 'Tag 2',
                'description' => 'Description for Tag 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more entries as needed
        ];

        DB::table('tag')->insert($tagData);
    }
}
