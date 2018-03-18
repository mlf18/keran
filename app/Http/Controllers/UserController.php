<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

use App\User;

use App\Admin;

use App\Profil;

use App\Proposal;

use App\Inventor;

use App\Kuesinventor;

use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPdf()
    {   
        $users  = User::all();

         // return view('inventor.cetak', compact('users'));

        $pdf = PDF::loadView('inventor.cetak',compact('users'))
                ->setPaper('a4');
 
    return $pdf->stream();

        
    }
    
    
    public function index()
    {
		$users=User::where('role','!=','super')->get();

        return (var_dump($users->first()));
		
        return view('superadmin.akun.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = Admin::pluck('kabupaten', 'id'); 
        return view('superadmin.akun.create', compact('admin'));

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
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors('Username & email Tidak Boleh Kosong / Sama')->withInput();
        }
            $role = $request->input('role');
            if ($role == 'superadmin'){
                $user = User::create($request->all());
                $user->password=bcrypt($user->password);
                $user->role=$request->input('role');
                $user->email=$request->input('email');
                $user->save();
                
                $admin = new Admin();

                $admin->user_id = $user->id;
                $admin->nama = $request->input('nama');
                $admin->pekerjaan = $request->input('pekerjaan');
                $admin->alamat = $request->input('alamat');
                $admin->no_telp = $request->input('no_telp');


                $admin->save();
             
       
                return redirect('user')->with('success','Tersimpan');
            }
            elseif ($role == 'admin'){ 
                $user = User::create($request->all());
        		$user->password=bcrypt($user->password);
        		$user->role=$request->input('role');
                $user->email=$request->input('email');
                $user->save();
                
                $admin = new Admin();

                $admin->user_id = $user->id;
                $admin->nama = $request->input('nama');
                $admin->pekerjaan = $request->input('pekerjaan');
                $admin->alamat = $request->input('alamat');
                $admin->no_telp = $request->input('no_telp');
                $admin->kabupaten = $request->input('kabupaten');


                $admin->save();
             
       
                return redirect('user')->with('success','Tersimpan');
            }
            elseif ($role == 'juri'){ 
                $user = User::create($request->all());
                $user->password=bcrypt($user->password);
                $user->role=$request->input('role');
                $user->email=$request->input('email');
                $user->save();
                
                $admin = new Admin();

                $admin->user_id = $user->id;
                $admin->nama = $request->input('nama');
                $admin->pekerjaan = $request->input('pekerjaan');
                $admin->alamat = $request->input('alamat');
                $admin->no_telp = $request->input('no_telp');


                $admin->save();
             
       
                return redirect('user')->with('success','Tersimpan');
            }
            elseif ($role == 'inventor'){ 
                $user = User::create($request->all());
                $user->password=bcrypt($user->password);
                $user->role=$request->input('role');
                $user->email=$request->input('email');
                $user->save();
                
                $profil = new Profil();

                $profil->user_id = $user->id;
                $profil->nama = $request->input('nama');
                $profil->email = $request->input('email');
                $profil->no_telp = $request->input('no_telp');
                $profil->admin_id = $request->input('kabupaten');

                $profil->save();

                $proposal=new Proposal();
                $proposal->status=0;
                $proposal->profil_id=$profil->id;
                $proposal->save();
                $inventor=new Inventor();
                $inventor->profil_id=$profil->id;
                $inventor->save();
                $kuesinventor=new Kuesinventor();
                $kuesinventor->profil_id=$profil->id;
                $kuesinventor->save();
             
       
                return redirect('user')->with('success','Tersimpan');
            }

            return redirect()->back()->withErrors('Pilih Role');
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
        $edit = User::where('id', $id)->first();
        $admin = Admin::pluck('kabupaten', 'id'); 
        return view ('superadmin.akun.edit', compact('edit','admin'));
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
        // $this->authorize('update.footer');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->password=bcrypt($user->password);
        

        $user->save();
        // $footer->roles()->sync($request->input('role_id'));
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
        // $this->authorize('delete.footer');
        $footers = user::find($id)->delete();
        return redirect('/user');
    }
}
