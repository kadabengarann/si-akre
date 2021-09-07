<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProdiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_US');
        for($x = 1; $x <= 6; $x++){
  
            DB::table('prodi')->insert([
                'nama' => $faker->catchPhrase
            ]);
 
        }
    }
}
