<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable =['title','user_id','channel_id','content'];


    public function channel()
    {
        return $this->belongsTo('App\Channel');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function replies()
    {
        return $this->hasMany'App\Reply');
    }
}
