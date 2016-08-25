<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
         TestDummy::times(20)->create('App\Comment');
    }
}
