<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PrestasiMahasiswa extends Model
{
    use HasFactory;
    use Sortable;
    protected $fillable = ['prestasi', 'jenis_prestasi', 'mahasiswa_id','penyelenggara','mahasiswa_id','skala','tanggal','berkas','berkas2','berkas3','berkas_kegiatan','berkas_kegiatan2','berkas_kegiatan3'];
    protected $table = 'prestasi';
    protected $dates = ['created_at'];
    public $sortable = ['prestasi','jenis_prestasi'];

    public function mahasiswa()
    {
        return $this->belongsTo(DataMahasiswa::class);
    }
}
