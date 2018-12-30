<?php

use Illuminate\Database\Seeder;

class PartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parts')->insert([
            'name' => 'Motor',
        ]);
        DB::table('parts')->insert([
            'name' => 'Driver',
        ]);
        DB::table('parts')->insert([
            'name' => 'Solar Panel',
        ]);
        DB::table('parts')->insert([
            'name' => 'Battery Bank',
        ]);
    }
}
