<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{

    public $timestamps = true;

    protected $fillable = [

        'requirements',
        'user_id',
        'description',
        'deadline',
        'duration',
        'status'

    ];

    public function getOwnerAttribute(){
        return User::where('id', $this->attributes['user_id'])->first();
    }

}
