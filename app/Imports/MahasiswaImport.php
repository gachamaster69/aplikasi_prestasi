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
            'program_studi' => $row[3],
            'angkatan' => $row[4],

        ]);
    }
}
