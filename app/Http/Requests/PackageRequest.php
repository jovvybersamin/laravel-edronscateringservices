<?php

namespace App\Http\Requests;


use App\Http\Requests\Request;

class PackageRequest extends Request
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

        if ($this->method() == 'PATCH' || $this->method() == 'PUT'){
            // Update operation, exclude the record with id from the validation.
            $name_rule = 'required|min:3|unique:packages,name,' . Request::get('id');
        } else {
            // Create operation.
            $name_rule = 'required|min:3|unique:packages';
        }

        return [
            'name' => $name_rule,
        ];

    }
}
