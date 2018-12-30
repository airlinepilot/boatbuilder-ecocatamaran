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
        $this->call([
        	BoatsTableSeeder::class,
        	PartsTableSeeder::class,
        	ItemsTableSeeder::class,
            Boat_ItemTableSeeder::class,
            UsersTableSeeder::class,
    	]);
    }
}
