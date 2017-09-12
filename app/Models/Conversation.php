<?php

namespace App\Models;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Conversation extends Model
{

    public function users(){
        return $this->belongsToMany(User::class, 'conversation_user');
    }

    public function messages(){
        return $this->hasMany(Message::class)->orderBy('updated_at', 'asc')->with('user');;
    }

    public function getLatestMessageAttribute(){
        return Message::where('conversation_id', $this->attributes['id'])->latest()->first();
    }

    public function addMessage($content, $user){
        $newMessage = new Message();
        $newMessage->user_id = $user;
        $newMessage->conversation_id = $this->id;
        $newMessage->content = $content;
        $newMessage->save();
        foreach($this->users as $convUser){
            $newMessageState = new MessageState();
            $newMessageState->user_id = $convUser->id;
            $newMessageState->message_id = $newMessage->id;
            if($user == $convUser->id){
                $newMessageState->state = MessageState::indexOf('unread');
            }
            if(Sentinel::getUser()->id == $convUser->id){
                $newMessageState->state = MessageState::indexOf('own');
            }
            $newMessageState->save();
        }
        return $newMessage;
    }

    public function getBuddyAttribute(){
        $conversation = DB::table('conversation_user')->where('conversation_id', $this->attributes['id'])->where('user_id','!=',Sentinel::getUser()->id)->first();
        if($conversation){
            $user = User::where('id', $conversation->eloquent_user_id)->first();
            return $user;
        }
        return Sentinel::getUser();
    }

    public function unreadMessages(){
        $unreadMessages = array();
        foreach($this->messages as $message){
            if($message->isUnread()){
                $unreadMessages[] = $message;
            }
        }
        return $unreadMessages;
    }

    public function isUnread(){
        return count($this->unreadMessages()) > 0;
    }

    public static function startConversation($sender, $receiver){
        $existingConversations = self::findConversation($sender, $receiver);
        if(!empty($existingConversations)) {
            $conversation = Conversation::where('id', $existingConversations)->first();
            return $conversation;
        }
        $newConversation = new Conversation();
        $newConversation->save();
        $newConversation->users()->attach($sender);
        $newConversation->users()->attach($receiver);
        return $newConversation;
    }

    private static function findConversation($sender, $receiver){
        $user1 = User::where('id', $sender)->first();
        $conversations = $user1->conversations()->get();
        foreach ($conversations as $conversation){
            $old = DB::table('conversation_user')->where('user_id', $receiver)->where('conversation_id', $conversation->id)->first();
            if(count($old) > 0){
                return $old->conversation_id;
            }
        }
        return [];
    }
}
