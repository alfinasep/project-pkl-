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
        $this->call(PostsTableSeeder::class);
        $this->call(bukuTableSeeder::class);
        $this->call(pendaftaranTableSeeder::class);
        $this->call(bukuuTableSeeder::class);
        $this->call(bioTableSeeder::class);
    }
}
