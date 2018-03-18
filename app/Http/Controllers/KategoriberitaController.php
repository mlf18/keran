<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KategoriberitaController extends Controller
{
    public function index(request $request)
    {
        $users  = User::orderBy('id','DESC')->paginate(5);
        return view('superadmin.akun.index', compact('users'))
        ->with('i', ($request->input('page', 1) - 1) * 2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.akun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $user->save();
        
        $admin = new Admin();

        $admin->user_id = $user->id;
        $admin->nama = $request->input('nama');
        $admin->pekerjaan = $request->input('pekerjaan');
        $admin->alamat = $request->input('alamat');
        $admin->no_telp = $request->input('no_telp');
        $admin->no_telp = $request->input('kabupaten');


        $admin->save();
             
       
        return redirect('superadmin');
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
        // $this->authorize('edit.user');    
        $edit = User::where('id', $id)->first();
        //$role_all = Role::all();
        // $role = Role::pluck('name','id');   
        return view('superadmin.akun.edit', compact('edit'));
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
        // $this->authorize('update.user');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->email = $request->input('role');
        if (!empty($request->input('password'))) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();
        // $user->roles()->sync($request->input('role_id'));
        return redirect('user');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $this->authorize('delete.user');
        $users = User::find($id)->delete();
        return redirect('/user');
    }
}
