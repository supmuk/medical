<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StandardFareChart extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'from' => 'required',
            'to' => 'required',
            'one_way_distance' => 'required',
            'fare' => 'required'
        ];
    }
}
