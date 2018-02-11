<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['name', 'slug', 'braintree_plan', 'cost', 'description'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getPublicDurationAttribute(){
        switch ($this->attributes['duration_type']){
            case 'addMonths':
                return 'months';
                break;
            case 'addYears':
                return 'years';
                break;
            default :
                return 'months';
        }
    }
}
