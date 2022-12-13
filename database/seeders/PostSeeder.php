<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image= fake()->imageUrl();
        Post::create(
            [
               
                    'title' => "Test post", //Generates a fake sentence
                    'description' => "test post description",
                    'slug' => "post-one-victor-azangu-1",
                    'imagePath' => $image,
                    'category_id' => 1,
                    'body' =>"this is some test body for the post", //generates fake 30 paragraphs
                    'user_id' => 1, //Generates a User from factory and extracts id
                
            ]
            );
    Post::factory()->count(10)->create();
    }
}
