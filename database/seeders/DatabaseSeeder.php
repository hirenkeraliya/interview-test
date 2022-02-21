<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Subscription;
use App\Models\Website;
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
        Post::factory(10)->create();

        Subscription::factory(10)->create();
    }
}
