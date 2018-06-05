<?php

use Illuminate\Database\Seeder;
use App\post;

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
              factory(post::class, 30)->create();

    }
}
