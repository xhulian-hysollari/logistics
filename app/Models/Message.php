<?php

namespace App\Models;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Message extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    public function messageStates()
    {
        return $this->hasMany(MessageState::class);
    }

    public function getMessageStateAttribute(){
        $byUser = Sentinel::getUser();

        $userStates = $this->messageStates()->where('user_id', '=', $byUser->id)->get()->first();

        return $userStates;
    }

    public function changeState($newStateKey = "read", Sentinel $byUser){
        $messageState = $this->messageState($byUser);

        if(!$messageState)
            return false;

        $newStateIndex = MessageState::indexOf($newStateKey);

        if($messageState->state == $newStateIndex)
            return $messageState;
        else {
            $messageState->state = $newStateIndex;
            $messageState->save();
        }
    }

    public function doRead(Sentinel $user){
        return $this->changeState('read', $user);
    }

    public function isRead($byUser){
        $messageState = $this->messageState($byUser);

        $notReadState = MessageState::indexOf('unread');
        return $messageState->state != $notReadState;
    }
}
