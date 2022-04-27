<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArsipPenugasan extends Model
{

    protected $table = 'arsip_penugasan';

    public $incrementing = false;

    protected $fillable = [
        'id', 'nama', 'keterangan', 'penugasan_id', 'file'
    ];
}
