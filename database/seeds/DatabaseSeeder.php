<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostsTableSeeder::class);

        $user = new App\User();
        $user->name = 'me';
        $user->email = 'zach@codeup.com';
        $user->password = Hash::make($_ENV['USER_PASS']);
        $user->save();
    }
}
