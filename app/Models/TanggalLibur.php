<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TanggalLibur extends Model
{

    protected $table = 'tanggal_libur';

    public $incrementing = false;

    protected $fillable = [
        'id', 'nama', 'tgl'
    ];
}
