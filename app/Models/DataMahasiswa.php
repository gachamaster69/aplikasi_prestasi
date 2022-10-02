<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataMahasiswa extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'data_mahasiswa';
    protected $guarded = [];
    protected $dates = ['created_at'];
    public $sortable = ['nim','ipk','pendapatan','jumlah_prestasi_nasional','jumlah_prestasi_internasional','tunggakan'];
}
