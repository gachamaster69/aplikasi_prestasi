<?php

namespace App\Exports;

use App\Models\DataMahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class MahasiswaExportIpk implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataMahasiswa::sortable()->orderBy('ipk','desc')->paginate(10);
    }
}
