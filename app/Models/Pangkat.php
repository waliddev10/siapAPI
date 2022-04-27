<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{

    protected $table = 'pangkat';

    public $incrementing = false;

    protected $fillable = [
        'id', 'nama', 'golongan'
    ];
}
