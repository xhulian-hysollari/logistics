<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\SoftDeletes;
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

    public function profile(){
        return $this->hasOne(Profile::class);
    }

}
