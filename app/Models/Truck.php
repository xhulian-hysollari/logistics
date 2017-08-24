<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Truck extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    public function getOwnerAttribute(){
        return User::where('id', $this->attributes['user_id'])->first();
    }

}
