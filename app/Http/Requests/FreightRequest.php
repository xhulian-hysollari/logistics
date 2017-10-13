<?php

namespace App\Http\Requests;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Foundation\Http\FormRequest;

class FreightRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Sentinel::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'freight_id' => 'required',
//            'weight' => 'required',
//            'height' => 'required',
//            'length' => 'required',
//            'volume' => 'required',
//            'lorry_type' => 'required',
//            'width' => 'required',
//            'loading' => 'required',
//            'loading_lat' => 'required',
//            'loading_lng' => 'required',
//            'unloading' => 'required',
//            'unloading_lat' => 'required',
//            'unloading_lng' => 'required',
//            'description' => 'required',
//            'quantity' => 'required|integer',
        ];
    }
}
