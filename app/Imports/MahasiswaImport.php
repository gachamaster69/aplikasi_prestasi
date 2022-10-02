<?php

namespace App\Imports;

use App\Models\DataMahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;

class MahasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataMahasiswa([
            'nim' => $row[1],
            'nama' => $row[2],
            'jurusan' => $row[3],
            'ipk' => $row[4],
            'pendapatan' => $row[5],
            'daftar_prestasi' => $row[6],
            'jumlah_prestasi_nasional' => $row[7],
            'jumlah_prestasi_internasional' => $row[8],
            'tunggakan' => $row[9],
            'organisasi' => $row[10]
            
        ]);
    }
}
