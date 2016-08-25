<?php

use App\Post;
use App\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Post::truncate();
        Comment::truncate();

        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);

        Model::reguard();
    }
}
