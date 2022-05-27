<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GenreSeeder;
use Database\Seeders\MovieSeeder;
use Database\Seeders\EpisodeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GenreSeeder::class,
            MovieSeeder::class,
            EpisodeSeeder::class,
        ]);
    }
}
