<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataUser extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'users';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
