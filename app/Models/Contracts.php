<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{

    public $timestamps = true;

    protected $fillable = [

        'requirements',
        'description',
        'deadline',
        'duration',
        'status'

    ];

}
