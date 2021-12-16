<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // $faker = Faker::create();

        // $bukti = $faker->randomElement(['STNK', 'SIM']);
        // $status = $faker->randomElement(['Berjalan', 'Selesai']);

        // foreach (range(1, 200) as $index) {
        //     DB::table('daftar_tilangs')->insert([
        //         'barang_bukti' => $faker->name,
        //         'no_stnk_sim' => $faker->numberBetween(250001, 482020),
        //         'nama' => $faker->name,
        //         'no_kendaraan' => $faker->numberBetween(2500, 4820),
        //         'tanggal_tilang' => $faker->date($format = 'Y-m-d', $max = 'now'),
        //         'tanggal_sidang' => $faker->date($format = 'Y-m-d', $max = 'now'),
        //         'status_penilangan' => $faker->name,
        //         'alamat' => $faker->address,
        // 'created_at' => $faker->date_create,
        // 'updated_at' => $faker->date_set,
        // ]);
        // }
    }
}
