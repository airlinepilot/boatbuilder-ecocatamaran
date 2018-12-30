<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => 'M102 Motor',
            'cost' => 1350,
            'image' => 'm102.jpeg',
            'link' => '/img/m102.jpeg',
            'part_id' => 1,
        ]);    
        DB::table('items')->insert([
            'name' => '15kw DC greenmotortech',
            'cost' => 890,
            'image' => '15kwDC.jpeg',
            'link' => '/img/15kwDC.jpeg',
            'part_id' => 1,
        ]);    
        DB::table('items')->insert([
            'name' => 'CBT china motor',
            'cost' => 1383,
            'image' => 'CBT.jpeg',
            'link' => '/img/CBT.jpeg',
            'part_id' => 1,
        ]);    
        DB::table('items')->insert([
            'name' => 'Driver master ultimate 144volt',
            'cost' => 1350,
            'image' => 'd1.jpeg',
            'link' => '/img/d1.jpeg',
            'part_id' => 2,
        ]);    
        DB::table('items')->insert([
            'name' => 'Driver 2',
            'cost' => 890,
            'image' => 'd2.jpeg',
            'link' => '/img/d2.jpeg',
            'part_id' => 2,
        ]);    
        DB::table('items')->insert([
            'name' => 'Driver 3',
            'cost' => 1383,
            'image' => 'd3.jpeg',
            'link' => '/img/d3.jpeg',
            'part_id' => 2,
        ]);    
        DB::table('items')->insert([
            'name' => 'Driver 4',
            'cost' => 1383,
            'image' => 'd4.jpeg',
            'link' => '/img/d4.jpeg',
            'part_id' => 2,
        ]);    
        DB::table('items')->insert([
            'name' => 'Solar Panel 1',
            'cost' => 400,
            'image' => 's1.jpeg',
            'link' => '/img/s1.jpeg',
            'part_id' => 3,
        ]);    
        DB::table('items')->insert([
            'name' => 'Solar Panel 2',
            'cost' => 480,
            'image' => 's2.jpeg',
            'link' => '/img/s2.jpeg',
            'part_id' => 3,
        ]);    
        DB::table('items')->insert([
            'name' => 'Solar Panel 3',
            'cost' => 580,
            'image' => 's3.jpeg',
            'link' => '/img/s3.jpeg',
            'part_id' => 3,
        ]);    
        DB::table('items')->insert([
            'name' => 'Solar Panel 4',
            'cost' => 540,
            'image' => 's4.jpeg',
            'link' => '/img/s4.jpeg',
            'part_id' => 3,
        ]);    
        DB::table('items')->insert([
            'name' => 'Battery Bank 1',
            'cost' => 240,
            'image' => 'p1.jpeg',
            'link' => '/img/p1.jpeg',
            'part_id' => 4,
        ]);    
        DB::table('items')->insert([
            'name' => 'Battery Bank 2',
            'cost' => 310,
            'image' => 'p2.jpeg',
            'link' => '/img/p2.jpeg',
            'part_id' => 4,
        ]);    
        DB::table('items')->insert([
            'name' => 'Battery Bank 3',
            'cost' => 100,
            'image' => 'p3.jpeg',
            'link' => '/img/p3.jpeg',
            'part_id' => 4,
        ]);    
       
    }
}
