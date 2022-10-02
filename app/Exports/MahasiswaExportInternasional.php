<?php

namespace App\Exports;

use App\Models\DataMahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class MahasiswaExportInternasional implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataMahasiswa::sortable()->orderBy('jumlah_prestasi_internasional','desc')->paginate(10);
    }
}
