<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Navigation;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $navigations = [
                [
                    'title' => 'Home',
                    'url' => '/',
                ],
                [
                    'title' => 'About',
                    'url' => '/about',
                ],
                [
                    'title' => 'Products',
                    'url' => '/products',
                ],
                [
                    'title' => 'Portfolio',
                    'url' => '/portfolio',
                ],
                [
                    'title' => 'Contact',
                    'url' => '/contact',
                ],
                [
                    'title' => 'Blog',
                    'url' => '/blog',
                ],
            ];
    
            foreach ($navigations as $navigation) {
                Navigation::create($navigation);
            }
        
    }
}
