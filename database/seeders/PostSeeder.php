<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        $post->title = 'Primer Post';
        $post->slug = 'primer-post';
        $post->content = 'Contenido del primer post';
        $post->save();
        Post::factory(18)->create();
    }
}
