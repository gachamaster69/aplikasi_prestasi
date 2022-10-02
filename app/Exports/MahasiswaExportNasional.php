<?php

namespace App\Exports;

use App\Models\DataMahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class MahasiswaExportNasional implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataMahasiswa::sortable()->orderBy('jumlah_prestasi_nasional','desc')->paginate(10);
    }
}
