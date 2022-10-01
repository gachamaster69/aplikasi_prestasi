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
            'alamat' => 'Garut',
            'ipk' => '3.9',
            'pendapatan' => '3000000',
            'daftar_prestasi' => 'Juara 2 Silat, Juara 4 Bahasa Inggris, Juara 3 renang',
            'jumlah_prestasi_nasional' => '1',
            'jumlah_prestasi_internasional' => '2',
            'tunggakan' => '900000',
        ]);

    }
}
