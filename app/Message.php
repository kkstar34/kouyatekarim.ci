<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'body', 'receiver_id', 'user_id'
    ];

    
    protected $appends = ['human_created_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getHumanCreatedAtAttribute(){
        return $this->created_at->diffForHumans();
    }

}
