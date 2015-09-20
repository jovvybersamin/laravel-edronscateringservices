<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PackageCourseRequest extends Request
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
        if ($this->method() == 'PUT' || $this->method() == 'PATCH')
        {
            $rule_no = 'required|min:1|numeric|unique:package_courses,no_of_main_courses,'. Request::get('id') .',id,package_id,' . Request::get('package_id');
        }
        else
        {
            $rule_no = 'required|min:1|numeric|unique:package_courses,no_of_main_courses,null,id,package_id,' . Request::get('package_id') ;
        }

        return [
            'no_of_main_courses' => $rule_no,
            'price_per_head'    =>  'required|min:1|numeric',
        ];
    }
}
