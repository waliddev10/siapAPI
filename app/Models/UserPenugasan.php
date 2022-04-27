<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPenugasan extends Model
{

    protected $table = 'user_penugasan';

    public $incrementing = false;

    protected $fillable = [
        'id', 'penugasan_id', 'user_id'
    ];
}
