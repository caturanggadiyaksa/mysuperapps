<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SosmedBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sosmedData = [
            [
                '_detail_user_id' => 1, // Replace with the appropriate user ID
                'name_sosmed' => 'Facebook',
                'link_sosmed' => 'https://www.facebook.com/your-facebook-profile',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                '_detail_user_id' => 2, // Replace with the appropriate user ID
                'name_sosmed' => 'Twitter',
                'link_sosmed' => 'https://twitter.com/your-twitter-profile',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more entries as needed
        ];

        DB::table('sosmed')->insert($sosmedData);
    }
}
