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
    public $sortable = ['nim','nama'];

    public function prestasi ()
    {
        return $this->hasMany(PrestasiMahasiswa::class);
    }
}
