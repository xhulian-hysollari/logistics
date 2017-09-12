<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Conversation extends Model
{

    public function users(){
        return $this->belongsToMany(User::class, 'conversation_user');
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function getLatestMessageAttribute(){
        return Message::where('conversation_id', $this->attributes['id'])->latest()->first();
    }


}
