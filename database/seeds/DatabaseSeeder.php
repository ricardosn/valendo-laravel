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
        $this->call(CollectionTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(PublisherTableSeeder::class);
        $this->call(TagTableSeeder::class);
    }
}
