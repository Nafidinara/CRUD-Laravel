<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PekerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //biodata asal dari indo, ID
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 15; $i++){
            //insert data dgn faker
            DB::table('pegawai')->insert([
                'pegawai_nama' => $faker->name,
                'pegawai_jabatan' => $faker->jobTitle,
                'pegawai_umur' => $faker->numberBetween(16,30),
                'pegawai_alamat' => $faker->address
            ]);
        }
        //memasukkan data ke db scr manual dgn seeder
        // DB::table('pegawai')->insert([
        //     'pegawai_nama' => 'Sumargo',
        //     'pegawai_jabatan' => 'manager',
        //     'pegawai_umur' => 21,
        //     'pegawai_alamat' => 'jakarta'
        // ]);
    }
}
