<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PackageRuleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (!\Auth::check()) return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->method() == 'PUT' || $this->method() == 'PATCH') {
            $menu_id = 'required|numeric|unique:package_rules,menu_id,' . Request::get('id') . ',id,package_id,' . Request::get('package_id');
            $no_of_items = 'required|min:1|numeric';
        } else {
            $menu_id = 'required|numeric|unique:package_rules,menu_id,null,id,package_id,' . Request::get('package_id');
            $no_of_items = 'required|min:1|numeric';
        }

        return [
            'menu_id' => $menu_id,
            'no_of_items' => $no_of_items
        ];
    }

    public function messages()
    {
        return [
          'menu_id.unique' =>   'Menu has already been taken.'
        ];
    }
}
