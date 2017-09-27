<?php

namespace App\Models;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Laravel\Cashier\Billable;

class User extends EloquentUser
{
    use SoftDeletes, Billable;

    public $timestamps = true;

    public $fillable = [
        'full_name',
        'email',
        'password',
        'company_logo',
    ];


    public function getMyBidsAttribute()
    {
        return Bid::where('user_id', $this->attributes['id'])->get();
    }

    public function getFreightsAttribute()
    {
        return Freight::where('user_id', $this->attributes['id'])->get();
    }

    public function getTrucksAttribute()
    {
        return Truck::where('user_id', $this->attributes['id'])->get();
    }

    public function getContractsAttribute()
    {
        return Contracts::where('user_id', $this->attributes['id'])->get();
    }

    public function getOfferAttribute()
    {
        return Bid::where('owner_id', $this->attributes['id'])->get();
    }

    public function getProfileAttribute()
    {
        return Profile::where('user_id', $this->attributes['id'])->first();
    }

    public function conversations(){
        return $this->belongsToMany(Conversation::class, 'conversation_user')->withTimestamps()->orderBy('updated_at', 'desc');
    }

    public function messageStates()
    {
        return $this->hasMany(MessageState::class)->orderBy('updated_at', 'desc');
    }

    public function unreadMessageStates(){
        return $this->messageStates()->where('status', '=', 0)->where('user_id',$this->attributes['id'])->orderBy('updated_at', 'desc')->get();
    }

    public function getUnreadMessagesCountAttribute(){
        return count($this->unreadMessageStates());
    }

    public function hasUnreadMessages(){
        return $this->unreadMessagesCount() > 0;
    }

    public function getUnreadConversationsAttribute(){
        $unreadConversations = Message::whereHas('messageStates', function($q)
        {
            $q->where('user_id', '=', $this->attributes['id'])->where('status', '=', 0);

        })->groupBy('conversation_id')->select(['conversation_id'])->get();
        return count($unreadConversations);
//        MessageState::whereRaw('status = 0')->get()->count();
    }

    public function UnreadMessages($conversation_id){
        return $this->findMessages('unread', $conversation_id);
    }

    public function findMessages($state = false, $conversation_id){
        $user_id = $this->id;

        $unreadMessages = Message::whereHas('messageStates', function($q) use( &$user_id, &$state, &$conversation_id)
        {
            $q->where('user_id', '=', $user_id);
            $q->where('conversation_id', '=', $conversation_id);

            if($state)
                $q->where('status', '=', MessageState::indexOf($state));

        })->with('conversation')->get();

        return count($unreadMessages);
    }

}
