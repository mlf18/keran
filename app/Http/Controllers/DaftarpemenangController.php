<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Daftarpemenang;

use Auth;

class DaftarpemenangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarpemenangs = Daftarpemenang::all();
        return view('superadmin.daftarpemenang.index', compact ('daftarpemenangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.daftarpemenang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $daftarpemenang = new Daftarpemenang();

        $file = $request->file('nama_file');
        $nameonly=preg_replace('/\..+$/', '', $file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $fileName   = $nameonly.'.'.$extension;
        $request->file('nama_file')->move("file/", $fileName);

        $daftarpemenang->nama_file = $fileName;
        $daftarpemenang->nama = $request->input('nama');
        $daftarpemenang->status = $request->input('status');

        $daftarpemenang->save();
        return redirect('/daftarpemenang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('superadmin.Daftarpemenang.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Daftarpemenang::where('id', $id)->first();
        return view ('superadmin.daftarpemenang.edit', compact('edit'));
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
        $Daftarpemenang = Daftarpemenang::where('id', $id)->first();
        $Daftarpemenang->nama = $request->input('nama');
        $Daftarpemenang->status = $request->input('status');

        if($request->file('nama_file') == '')
        {
            $Daftarpemenang->nama_file = $Daftarpemenang->nama_file;
        } 
        else
        {
            // $file       = $request->file('nama-Daftarpemenang');
            // $fileName   = $file->getClientOriginalName();
            // $request->file('nama-Daftarpemenang')->move("image/", $fileName);
            // $update->nama-file = $fileName;
       

        $file = $request->file('nama_file');
        $nameonly=preg_replace('/\..+$/', '', $file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $fileName   = $nameonly.'.'.$extension;
        $request->file('nama_file')->move("file/", $fileName);

        $Daftarpemenang->nama_file = $fileName ;
        }
        $Daftarpemenang->update();

        return redirect('/daftarpemenang')->with('success', 'Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengantar = Daftarpemenang::find($id)->delete();
        return redirect('/daftarpemenang');
    }
}
