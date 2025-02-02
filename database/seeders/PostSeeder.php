<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $category = Category::first();
        $tag = Tag::first();

        Post::create([
            'title' => 'Seeding in Laravel',
            'slug' => 'seeding-in-laravel',
            'content' => 'This post explains seeding in Laravel.',
            'description' => 'Learn how to seed data.',
            'category_id' => $category->id,
            'tag_id' => $tag->id,
            'published_at' => now(),
        ]);
    }
}
