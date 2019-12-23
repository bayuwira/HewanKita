<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forums';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected  $fillable = [
        'judul',
        'konten',
        'slug',
        'status',
        'user_id'
    ];

    public function comments(){
        return $this->hasMany(ForumDetail::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
