<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumDetail extends Model
{
    protected $table = 'forum_comments';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected  $fillable = [
        'forum_id',
        'user_id',
        'comment'
    ];

    public function forum(){
        return $this->belongsTo(Forum::class);
    }
}
