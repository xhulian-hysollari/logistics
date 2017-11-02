<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Truck extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    public function getOwnerAttribute(){
        return User::where('id', $this->attributes['user_id'])->first();
    }

    public function scopeActive($query){
        return $query->whereDate('valid_until', '<',
            Carbon::parse($this->attributes['valid_until'])->addDays(3));
    }

}
