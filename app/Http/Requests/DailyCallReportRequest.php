<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DailyCallReportRequest extends FormRequest
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
            'headquarter_name' => 'required',
            'place_of_working' => 'required',
            'working_with' => 'required',
            'visited_doctor_name' => 'required',
            'visited_chemist_name' => 'required',
            'pob' => 'required',
            // 'stockist_visited' => 'required',
        ];
    }
}
