<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdukKategori extends Model
{
    protected $table = 'produk_kategoris';
    protected $primaryKey = 'id';
    public $incrementing = true;
    
    protected  $fillable = [
        'nama',
        'slug'
    ];
}
