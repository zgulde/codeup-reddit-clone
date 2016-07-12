<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->name = $_ENV['USER_NAME'];
        $user->email = $_ENV['USER_EMAIL'];
        $user->password = Hash::make($_ENV['USER_PASS']);
        $user->save();

        factory(App\User::class, 5)->create()->each(function ($user) {
            $user->save();
        });
    }
}
