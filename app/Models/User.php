<?php

namespace App\Models;

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

    public function getOfferAttribute()
    {
        return Bid::where('owner_id', $this->attributes['id'])->get();
    }

    public function getProfileAttribute()
    {
        return Profile::where('user_id', $this->attributes['id'])->first();
    }

    public function conversations(){
        return $this->belongsToMany(Conversation::class, 'conversation_user');
    }

    public function getUnreadConversationsAttribute(){
        $res = DB::table('message_statuses')
            ->join('messages','message_statuses.message_id','=','messages.id')
            ->join('conversation_user','message_statuses.conversation_id','=','conversation_user.conversation_id')
            ->where('messages.sent_by', '!=', $this->attributes['id'])
            ->where('conversation_user.user_id', $this->attributes['id'])
            ->select('messages.conversation_id', DB::raw('count(*) as count'))
            ->groupBy('messages.conversation_id')
            ->get();
        return $res['count'];
    }

}
