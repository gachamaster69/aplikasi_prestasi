<?php

namespace App\Exports;

use App\Models\DataMahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class MahasiswaExportTunggakan implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataMahasiswa::sortable()->orderBy('tunggakan','desc')->paginate(10);
    }
}
