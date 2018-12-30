<?php

use Illuminate\Database\Seeder;

class BoatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boats')->insert([
            'name' => "Example Boat Template 1",
            'image' => "b1.jpeg",
            'cost' => 2993,
        ]);    
        DB::table('boats')->insert([
            'name' => "Example Boat Template 2",
            'image' => "b2.jpeg",
            'cost' => 3476,
        ]);    
        DB::table('boats')->insert([
            'name' => "Example Boat Template 3",
            'image' => "b3.jpeg",
            'cost' => 3373,
        ]);    
        DB::table('boats')->insert([
            'name' => "Example Boat Template 4",
            'image' => "b4.jpeg",
            'cost' => 2420,
        ]);    
        DB::table('boats')->insert([
            'name' => "Example Boat Template 5",
            'image' => "b5.jpeg",
            'cost' => 2960,
        ]);    
    }
}
