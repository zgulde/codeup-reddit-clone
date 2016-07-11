<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new App\Post();
        $post->title = 'test post, please ignore';
        $post->link = 'http://google.com';
        $post->save();
    }
}
