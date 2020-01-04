<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    protected $table = 'keranjangs';
    protected $primaryKey = 'id';
    public $incrementing = true;
    
    protected  $fillable = [
        'produk_jual_id',
        'jumlah',
        'user_id',
    ];
}
