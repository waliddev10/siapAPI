<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriPenugasan extends Model
{

    protected $table = 'kategori_penugasan';

    public $incrementing = false;

    protected $fillable = [
        'id', 'nama'
    ];
}
