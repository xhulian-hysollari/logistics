<?php

namespace App\Http\Requests;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Sentinel::inRole('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'cost' => 'required|integer',
            'duration' => 'required|integer',
            'duration_type' => 'required',
            'freight_listing' => 'required|integer',
            'truck_listing' => 'required|integer',
            'tender_listing' => 'required|integer',
            'ads' => 'required|integer',
        ];
    }
}
