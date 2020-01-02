<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk_juals';
    protected $primaryKey = 'id';
    public $incrementing = true;
    
    protected  $fillable = [
        'nama',
        'deskripsi',
        'slug',
        'no_telp',
        'photo_thumbnail',
        'harga_jual',
        'harga_beli',
        'diskon',
        'stok',
        'kondisi',
        'produk_kategori_id',
    ];

}
