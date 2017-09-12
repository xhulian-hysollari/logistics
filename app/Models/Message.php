<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Message extends Model
{
    public function conversation(){
        return $this->belongsTo(Conversation::class);
    }

    public function status(){
        return $this->belongsToMany(MessageStatus::class, 'message_status');
    }

    public static function sendMessage($sender, $to = [], $msg, $conversation = null){
        if (!$conversation){
            $conversation = new Conversation();
            $conversation->initiated_by = $sender;
            $conversation->save();
            $conversation->users()->save($sender, ['status', 1]);
        }
        $conversation->users()->sync($to);
        $message = new Message();
        $message->conversation_id = $conversation->id;
        $message->sender = $sender;
        $message->message = $msg;
        $message->save();
        $message->status()->save($sender, ['status', 2]);
        foreach ($to as $recipient){
            $message->status()->save($recipient, ['status', 0]);
        }
    }

    public static function readConversation($user, $conversation_id){
        DB::table('conversation_user')->where('user_id',$user)->where('conversation_id', $conversation_id)->update(['status' => 1]);
    }

    public static function readMessage($user, $message_id){
        DB::table('message_status')->where('user_id', $user)->where('message_id', $message_id)->update(['status' => 1]);
    }

    public static function deleteConversation($user, $conversation_id){
        DB::table('conversation_user')->where('user_id',$user)->where('conversation_id', $conversation_id)->update(['status' => 3]);
    }

    public static function deleteMessages($user, $message_id){
        DB::table('message_status')->where('user_id', $user)->where('message_id', $message_id)->update(['status' => 3]);
    }
}
