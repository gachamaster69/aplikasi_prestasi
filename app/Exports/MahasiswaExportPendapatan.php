<?php

namespace App\Exports;

use App\Models\DataMahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class MahasiswaExportPendapatan implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataMahasiswa::sortable()->orderBy('pendapatan','asc')->paginate(10);
    }
}
