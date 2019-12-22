<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';
    protected  $fillable = [
        'user_id',
        'no_telp',
        'alamat',
        'thumbnail'
    ];
}
