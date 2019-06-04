<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Users;


class Tweet extends Model
{
    protected $table = 'tweet';
    protected $fillable = [
        'id',
        'user_id',
        'tweet',
        'create_at',
    ];


    public function user()
    {
        return $this->belongsTo('App\User' ,'user_id','id');
    }
}
