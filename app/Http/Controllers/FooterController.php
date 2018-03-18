<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Footer;

use Validator;

class FooterController extends Controller
{
    
    public function index($id= '1')
    {
        // $this->authorize('edit.footer');    
        $edit = Footer::where('id', $id)->first();
        //$role_all = Role::all();
        // $role = Role::pluck('name','id');   
        return view('superadmin.footer.edit', compact('edit'));
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
            'alamat' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $footer = footer::find($id);
        $footer->alamat = $request->input('alamat');
        $footer->website = $request->input('website');
        $footer->email = $request->input('email');
        $footer->phone = $request->input('phone');
        $footer->fax = $request->input('fax');
        $footer->url_fb = $request->input('url_fb');
        $footer->url_twitt = $request->input('url_twitt');
        $footer->url_ig = $request->input('url_ig');
        $footer->url_web = $request->input('url_web');
        $footer->url_hashtag = $request->input('url_hashtag');
        
        

        $footer->save();
        // $footer->roles()->sync($request->input('role_id'));
        return redirect('footer');
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
        $footers = footer::find($id)->delete();
        return redirect('/footer');
    }
}
