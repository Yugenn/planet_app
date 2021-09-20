<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name'=>'水星',
            'en_name'=>'MERCURY',
            'radius'=>'2439',
            'weight'=>'3310',
        ]);
            
    }
} 