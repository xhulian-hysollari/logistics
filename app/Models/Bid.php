<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bid extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    public function getOwnerAttribute()
    {
        $user = User::where('id', $this->attributes['owner_id'])->first();
        return $user->first_name . ' ' . $user->last_name;
    }

    public function getBidderAttribute()
    {
        $user = User::where('id', $this->attributes['user_id'])->first();
        return $user->first_name . ' ' . $user->last_name;
    }

    public function getItemNameAttribute()
    {
        if (empty($this->attributes['truck_id'])) {
            return Freight::where('id', $this->attributes['freight_id'])->first()->freight_id;
        } else {
            return Truck::where('id', $this->attributes['truck_id'])->first()->plate;
        }
    }

}
