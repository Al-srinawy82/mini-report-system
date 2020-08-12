<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskStoreValidation extends FormRequest
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
            'employee_id' => 'required|integer',
            'month_id' => 'required|integer',
            'description' => 'required|String',
            'url' => 'required|URL',
            'deliverable_id' => 'required|integer',
            'project_id' => 'required|integer',
        ];
    }
    

    public function messages()
    {

        return [
            'employee_id.required'=>'Your Name Is Required',
            'month_id.required'=>'Month Is Required',
            'description.required'=>'Taks Details Are Required',
            'url.required'=>'Url Is Required',
            'deliverable_id.required'=>'Deliverable Is Required',
            'project_id.required'=>'Project Is Required',
            "*.integer"=> 'Filde Must Be An Integer',
            "*.URL"=> 'Filde Must Be Url',
        ];

    }

}
