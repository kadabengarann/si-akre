<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ReviewerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($x = 1; $x <= 3; $x++) {

            DB::table('reviewer')->insert([
                'rev_id' => sprintf('rev%03d', $x),
                'nama' => $faker->name,
                'instansi' => $faker->city,
                'alamat' => $faker->address,
                'tgl_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'tmp_lahir' => $faker->city,
                'img_url' =>  $x . '.jpg',
            ]);
        }
    }
}
