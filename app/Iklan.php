<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    protected $table = 'produk_iklans';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected  $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'thumbnail',
        'no_telp',
        'detail',
        'lokasi',
        'user_id',
    ];
}
