<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $primaryKey = 'id';
    public $incrementing = true;
    
    protected  $fillable = [
        'jumlah',
        'harga',
        'user_id'
    ];
}
