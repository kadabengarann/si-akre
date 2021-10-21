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
        DB::table('prodi')->insert([
            'nama' => 'Teknik Sipil'
        ]);
        DB::table('prodi')->insert([
            'nama' => 'Arsitektur'
        ]);
        DB::table('prodi')->insert([
            'nama' => 'Teknik Pertambangan'
        ]);
        DB::table('prodi')->insert([
            'nama' => 'Teknik Kimia'
        ]);
        DB::table('prodi')->insert([
            'nama' => 'Teknik Lingkungan'
        ]);
        DB::table('prodi')->insert([
            'nama' => 'Teknik Mesin'
        ]);
        DB::table('prodi')->insert([
            'nama' => 'Teknologi Informasi'
        ]);
        // $faker = Faker::create('en_US');
        // for($x = 1; $x <= 6; $x++){

        //     DB::table('prodi')->insert([
        //         'nama' => $faker->catchPhrase
        //     ]);

        // }
    }
}
