<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;
use Cmgmyr\Messenger\Traits\Messagable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Cashier\Billable;

class User extends EloquentUser
{
    use SoftDeletes, Billable, Messagable;

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

}
