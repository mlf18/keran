<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

Use Validator;

use App\Kabupaten;

class KabupatenController extends Controller
{
    public function index(request $request)
    {
        $kabupatens  = Kabupaten::All();
        return view('superadmin.kabupaten.index', compact('kabupatens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.kabupaten.create');
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
            'nama' => 'required',
            'kode' => 'required|unique:kabupatens',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $kabupaten = new Kabupaten();
        $kabupaten->name = $request->input('nama');
        $kabupaten->kode = $request->input('kode');
        
        $kabupaten->save();
             
       
        return redirect('/kabupaten')->with('success', 'Tersimpan');
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
        $edit = Kabupaten::where('id', $id)->first();
        //$role_all = Role::all();
        // $role = Role::pluck('name','id');   
        return view('superadmin.kabupaten.edit', compact('edit'));
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
            'nama' => 'required',
            'kode' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $kabupaten = Kabupaten::find($id);
        $kabupaten->name = $request->input('nama');
        $kabupaten->kode = $request->input('kode');
       
        $kabupaten->save();
        // $user->roles()->sync($request->input('role_id'));
        return redirect('/kabupaten');
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
        $users = Kabupaten::find($id)->delete();
        return redirect('/kabupaten');
    }
}
