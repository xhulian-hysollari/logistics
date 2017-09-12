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

    public function getUnreadConversationsAttribute(){
        $user = Sentinel::getUser();
        return DB::table('message_statuses')
            ->join('messages','message_state.message_id','=','messages.id')
            ->join('conversation_user','message_statuses.conversation_id','=','conversation_user.conversation_id')
            ->where('messages.sent_by', '!=', $user->id)
            ->where('conversation_user.user_id', $user->id)
            ->select('messages.conversation_id', DB::raw('count(*) as count'))
            ->groupBy('messages.conversation_id')
            ->get();
    }
}
