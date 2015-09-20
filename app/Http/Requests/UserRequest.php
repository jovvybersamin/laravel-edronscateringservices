<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Request;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::check()){
            return true;
        }
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
            $username   =   'required|max:255|unique:users,username,' . Request::get('id');
            $email      =   'required|max:255|email|unique:users,email,' . Request::get('id');
        }
        else
        {
            $username   =   'required|max:255|unique:users';
            $email      =   'required|max:255|email|unique:users';
        }
        return [
            'name'  =>  'required|max:255',
            'username'  => $username,
            'email'     => $email,
            'password'  =>  'required|min:5|max:255'
        ];
    }
}
