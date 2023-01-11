<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataMahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_mahasiswa')->insert([
            'nim' => '1806045',
            'nama' => 'Wulan',
            'program_studi' => 'Manajemen S1',
            'angkatan' => '2018'
        ]);

    }
}
