<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JabatanTim extends Model
{

    protected $table = 'jabatan_tim';

    public $incrementing = false;

    protected $fillable = [
        'id', 'nama'
    ];
}
