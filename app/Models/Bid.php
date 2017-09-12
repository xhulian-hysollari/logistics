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
        return User::where('id', $this->attributes['owner_id'])->first();
    }

    public function getBidderAttribute()
    {
        return User::where('id', $this->attributes['user_id'])->first();
    }

    public function getItemAttribute()
    {
        if (!empty($this->attributes['freight_id'])) {
            return Freight::where('id', $this->attributes['freight_id'])->first();
        } else if (!empty($this->attributes['truck_id'])){
            return Truck::where('id', $this->attributes['truck_id'])->first();
        } else{
            return Contracts::where('id', $this->attributes['contract_id'])->first();
        }
    }

    public function getFilesAttribute(){
        return BidFile::where('bid_id', $this->attributes['id'])->get();
    }

}
