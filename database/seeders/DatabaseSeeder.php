<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->name = 'احمد السيد';
        $user->password = Hash::make('12345678');
        $user->email = 'mail@test.com';
        $user->save();
    }
}
