<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Panduan;

use Auth;

class PanduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $panduans = Panduan::all();
        return view('superadmin.panduan.index', compact ('panduans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.panduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $panduan = new Panduan();

        $file = $request->file('nama-panduan');
        $nameonly=preg_replace('/\..+$/', '', $file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $fileName   = $nameonly.'.'.$extension;
        $request->file('nama-panduan')->move("file/", $fileName);

        $panduan->nama_panduan = $fileName;
        $panduan->nama = $request->input('nama');
        $panduan->status = $request->input('status');

        $panduan->save();
        return redirect('/panduansuperadmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('superadmin.panduan.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Panduan::where('id', $id)->first();
        return view ('superadmin.panduan.edit', compact('edit'));
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
        $panduan = Panduan::where('id', $id)->first();
        $panduan->nama = $request->input('nama');
        $panduan->status = $request->input('status');

        if($request->file('nama-panduan') == '')
        {
            $panduan->nama_panduan = $panduan->nama_panduan;
        } 
        else
        {
            
       

        $file = $request->file('nama-panduan');
        $nameonly=preg_replace('/\..+$/', '', $file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $fileName   = $nameonly.'.'.$extension;
        $request->file('nama-panduan')->move("file/", $fileName);

        $panduan->nama_panduan = $fileName ;
        }
        $panduan->update();

        return redirect('/panduansuperadmin')->with('success', 'Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengantar = Panduan::find($id)->delete();
        return redirect('/panduansuperadmin');
    }
}
