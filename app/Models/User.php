<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'user';

    public $incrementing = false;

    protected $fillable = [
        'id', 'nama', 'nip', 'jabatan', 'pangkat_id', 'bidang_id', 'no_hp'
    ];

    protected $hidden = [
        'password',
    ];
}
