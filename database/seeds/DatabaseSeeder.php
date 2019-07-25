<?php

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
        // $this->call(UsersTableSeeder::class);
        factory(\App\User::class)->create([
            'email'    => 'admin@demo.com',
            'password' => bcrypt('secret')
        ]);

        factory(\App\Category::class, 5)->create(['parent_id' => 0]);
        factory(\App\Category::class, 10)->create();
    }
}
