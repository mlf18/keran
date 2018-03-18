<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Slider;

use Validator;

class SliderController extends Controller
{
  
    public function index(request $request)
    {
        $slider  = Slider::orderBy('id', 'Desc')->get();
        return view('superadmin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.slider.create');
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
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $slider = new Slider();
        $slider->nama = $request->input('nama');
        $slider->status = $request->input('status');
        $file       = $request->file('nama_slider');
        $fileName   = $file->getClientOriginalName().time().'.png';
        $request->file('nama_slider')->move("suratpengantarkota/", $fileName);

        $slider->nama_slider = $fileName;
        $slider->save();
    
       
        return redirect('slider');
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
        // $this->authorize('edit.slider');    
        $edit = slider::where('id', $id)->first();
        //$role_all = Role::all();
        // $role = Role::pluck('name','id');   
        return view('superadmin.slider.edit', compact('edit'));
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
        // $this->authorize('update.slider');
        $validator = Validator::make($request->all(), [
            'nama' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $slider = Slider::find($id);
        $slider->nama = $request->input('nama');
        $slider->status = $request->input('status');

        if($request->file('nama_slider') == '')
        {
            $slider->nama_slider = $slider->nama_slider;
        } 
        else
        {
        
        
        $file       = $request->file('nama_slider');
        $fileName   = $file->getClientOriginalName().time().'.png';
        $request->file('nama_slider')->move("suratpengantarkota/", $fileName);

        $slider->nama_slider = $fileName;
        }
        $slider->save();
        // $slider->roles()->sync($request->input('role_id'));
        return redirect('slider');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $this->authorize('delete.slider');
        $sliders = slider::find($id)->delete();
        return redirect('/slider');
    }
}
