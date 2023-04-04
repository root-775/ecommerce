<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Politics',
                'slug' => 'politics',
                'description' => 'To discuss politics'
            ],
            [
                'name' => 'News and Events',
                'slug' => 'news',
                'description' => 'To discuss news and world events'
            ],
            [
                'name' => 'Food and Cooking',
                'slug' => 'cooking',
                'description' => 'To discuss cooking and food'
            ],
            [
                'name' => "Animals and Nature",
                'slug' => 'animals-nature',
                'description' => 'To discuss politics'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
