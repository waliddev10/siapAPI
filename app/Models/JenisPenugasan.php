<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisPenugasan extends Model
{

    protected $table = 'jenis_penugasan';

    public $incrementing = false;

    protected $fillable = [
        'id', 'nama'
    ];
}
