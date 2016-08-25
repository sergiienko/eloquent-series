<?php

$factory(App\User::class, [
    'name' => $faker->name,
    'email' => $faker->safeEmail,
    'password' => bcrypt(str_random(10)),
    'remember_token' => str_random(10),
]);

$factory(App\Post::class, [
	'user_id' => 'factory:App\User',
	'title' => $faker->name,
	'body' => $faker->paragraph
]);

$factory(App\Comment::class, [
        'post_id' => 'factory:App\Post',
        'body' => $faker->paragraph
]);
