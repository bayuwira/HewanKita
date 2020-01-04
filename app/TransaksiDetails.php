<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiDetails extends Model
{
    protected $table = 'transaksi_details';
    protected $primaryKey = 'id';
    public $incrementing = true;
    
    protected  $fillable = [
        'transaksi_id',
        'produk_jual_id',
        'jumlah',
        'harga'
    ];
}
