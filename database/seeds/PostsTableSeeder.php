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
        $userIds = App\User::all()->map(function ($user) {
            return $user->id;
        });

        factory(App\Post::class, 50)->create()->each(function ($post) use ($userIds) {
            $post->user_id = $userIds->random();
            $post->save();
        });
    }
}
