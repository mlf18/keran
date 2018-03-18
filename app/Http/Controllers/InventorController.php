<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Profil;

use App\User;
use App\Draftinventor;
use App\Proposal;
use App\Kuesinventor;
use App\Inventor;
use App\Http\Requests;
use PDF;
class InventorController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('role');
    // }
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profil=Auth::user()->id;
        $drafts=Draftinventor::where('profil_id','=',Auth::user()->profil->id)->get();
        return view('inventor.profil.index')->with(['profil'=>$profil,'drafts'=>$drafts]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=Auth::user()->admin->profil;
        if (count($user) > 7){
            return redirect('admin/datainventor')->with('error','Jumlah Inventor Melebihi Batas');    
        }else{
            return view('admin.createinventor');
        }
    }

    public function cetakproposal($id){
        $profil=Profil::find($id);
        $admin=$profil->admin;
        $inventor=$profil->inventor->first();
        $proposal=$profil->proposal->first();
        $kuesinventor=$profil->kuesinventor;
        // return view('inventor.proposal.cetakinventor_proposal',compact('profil','proposal','kuesinventor','admin','inventor'));
        $pdf = PDF::loadView('inventor.proposal.cetakinventor_proposal',compact('profil','proposal','kuesinventor','admin','inventor'))
                ->setPaper('a4', 'potrait');
 
        return $pdf->stream();
    }

    public function draft($id){
        $draft=Draftinventor::find($id);
        return view('inventor.proposal.draft')->with('draft',$draft);
    }
	public function resetpassword(){
        return view('inventor.password.reset');
    }
    public function storepassword(Request $request){
        if ($request->input('password')==$request->input('confirm_password')){
            $user=Auth::user();
            if (\Hash::check($request->input('password_lama'), $user->password)){
                $user->password=bcrypt($request->input('password'));
                if($user->save()){
                    return redirect('inventor')->with('success','Tersimpan');
                }
            }else{
                return redirect('inventor/resetpassword')->with('error','Gagal Menyimpan Periksa Kembali Password Anda');
            }
            
        }else{
            return redirect('inventor/resetpassword')->with('error','Gagal Menyimpan Periksa Kembali Password Anda');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $profil = new Profil();
        $profil->nama=$request->input('nama');
        $profil->alamat=$request->input('alamat');
        $profil->email=$request->input('email');
        $profil->no_telp=$request->input('no_telp');
        $profil->judul=$request->input('inovasi');
        $profil->admin_id=Auth::user()->admin->id;
        $profil->kabupaten=$request->input('kabupaten');
        $user->name=$request->input('username');
        $user->password=bcrypt($request->input('password'));
        $user->email=$request->input('email');
        $user->role="inventor";
        $user->save();
        $profil->user_id=$user->id;
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
        return redirect ('admin/datainventor')->with('success','Tersimpan');
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
    public function edit()
    {
        //
        $profil=Auth::user()->profil;
        return view('inventor.profil.edit')->with(['profil'=>$profil]);
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
        //
        $profil= Profil::find($id);
        $this->validate($request,[
            'nama'=> 'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            'kabupaten'=>'required',
            'email'=>'required',
            'inovasi'=>'required'
        ]);
        $profil->nama=$request->input('nama');
        $profil->alamat=$request->input('alamat');
        $profil->no_telp=$request->input('no_telp');
        $profil->kabupaten=$request->input('kabupaten');
        $profil->email=$request->input('email');
        $profil->judul=$request->input('inovasi');
        $profil->save();
        return redirect('inventor')->with('success','Tersimpan');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
