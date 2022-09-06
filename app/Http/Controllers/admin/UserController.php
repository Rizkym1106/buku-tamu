<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $role = Role::all();
        $data = [
            'user' => $user,
            'role' => $role,
        ];
        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'role'=>Role::all(),
            
        ];
        return view('admin.user.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'role_id' => 'required',
        ], [
            'nama.required' => 'Nama Harus Diisi',
            'nama.min' => 'Nama Minimal 5 Karakter',
            'nama.max' => 'Nama Maksimal 20 Karakter',
            'username.required' => 'Username Harus Diisi',
            'username.unique' => 'Username Telah Ada',
            'password.required' => 'Password Harus Diisi',
            'role_id.required' => 'Role Harus Diisi',

        ]);

        $user=new User;
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;

        $user->save();

        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataAdmin = User::findOrFail($id);
        $role = Role::all();
        return view('admin.user.edit', compact('role', 'dataAdmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataAdmin = User::findOrFail($id);
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'role_id' => 'required',
        ], [
            'nama.required' => 'Nama Harus Diisi',
            'nama.min' => 'Nama Minimal 5 Karakter',
            'nama.max' => 'Nama Maksimal 20 Karakter',
            'username.required' => 'Username Harus Diisi',
            'username.unique' => 'Username Telah Ada',
            'password.required' => 'Password Harus Diisi',
            'role_id.required' => 'Role Harus Diisi',

        ]);

        $user= user::findOrFail($id);
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;

        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
