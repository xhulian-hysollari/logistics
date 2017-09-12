<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{

    public function users(){
        return $this->belongsToMany(User::class, 'conversation_user');
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function getLatestMessageAttribute(){
        dd($this->messages->latest() . '  | |  ' . Message::where('conversation_id', $this->attributes['id'])->latest());
        return Message::where('conversation_id', $this->attributes['id'])->latest();

    }
}
