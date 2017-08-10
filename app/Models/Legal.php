<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Legal extends Model
{
    use SoftDeletes, Translatable;

    public $timestamps = true;

    public $translatedAttributes = ['title', 'content'];

}
