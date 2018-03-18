<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Admin;

use App\Pengantarkota;

use Auth;

use App\User;
class PengantarkotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $admin=Auth::user()->admin;
        $pengantars=Pengantarkota::where('admin_id','=',$admin->id)->get();
       
        return view('admin.suratpengantar.index', compact ('pengantars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin=Auth::user()->admins;
        return view('admin.suratpengantar.create', compact ('admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin=Auth::user()->admin;

        $pengantarkota = new Pengantarkota();

        $pengantarkota->admin_id = $admin->id;
        // $pengantarkota->jabatan = $request->input ('nama_surat');
        // $pengantarkota->nama = $request->input ('nama_surat');
        $nama = Auth::user()->name;
        $file       = $request->file('nama_surat');
        $nameonly=preg_replace('/\..+$/', '', $file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $fileName   = $nameonly.'_'.$nama.'.'.$extension;
        $request->file('nama_surat')->move("suratpengantarkota/", $fileName);

        $pengantarkota->nama_surat = $fileName;

        $pengantarkota->save();

        return redirect('/pengantarkota')->with('success', 'Saved');
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
        // $admin=Auth::user()->admins;
        // $pengantars=Pengantarkota::where('admin_id', $admin->id)->first();
        // return view('admin.suratpengantar.create', compact ('pengantars'));
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
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        
        // $pengantar = User::find($id);
        // $pengantar->name = $request->input('name');
        // $pengantar->email = $request->input('email');
        // $pengantar->role = $request->input('role');
        // $pengantar->password = $request->input('password');
        

        // $pengantar->save();
        // $footer->roles()->sync($request->input('role_id'));
        return redirect('pengantarkota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $footers = Pengantarkota::find($id)->delete();
        return redirect('/pengantarkota');
    }
}