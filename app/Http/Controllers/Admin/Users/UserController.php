<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    /**
     * List all the users.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users  =   User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Shows the user's create form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.users.create');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit',compact('user'));
    }


    /**
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
       $data = $request->all();


       if (!isset($data['is_admin']))
           $data['is_admin'] = 0;

       if(!isset($data['is_active']))
           $data['is_active'] = 0;


        $user = User::create([
            'name'      => $data['name'],
            'email'  => $data['email'],
            'username'  => $data['username'],
            'password'  => bcrypt($data['password']),
            'is_admin'  => (boolean)$data['is_admin'],
            'is_active' => (boolean)$data['is_active'],
        ]);

        flash()->message('Successfully created.' . $user->name,'success');
        return redirect()->route('admin.users.edit',$user->id);
    }

    public function update($id,UserRequest $request)
    {
        $data = $request->all();

        if (!isset($data['is_admin']))
            $data['is_admin'] = 0;

        if(!isset($data['is_active']))
            $data['is_active'] = 0;

        $user   = User::findOrFail($id);
        $data['password']   = bcrypt($data['password']);
        $user->update($data);

        flash()->message('Successfully updated: ' . $user->name,'success');
        return redirect()->route('admin.users.edit',$user->id);
    }


}
