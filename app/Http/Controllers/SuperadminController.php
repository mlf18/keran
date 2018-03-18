<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Proposal;

use App\Superadmin;

use App\Profil;

use App\User;

use App\Admin;

use App\Pengantarkota;

use App\Kuesadmin;

use Auth;

use PDF;


class SuperadminController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resetpassword(){
        return view('superadmin.password.reset');
    }
    public function storepassword(Request $request){
        if ($request->input('password')==$request->input('confirm_password')){
            $user=Auth::user();
            if (\Hash::check($request->input('password_lama'), $user->password)){
                $user->password=bcrypt($request->input('password'));
                if($user->save()){
                    return redirect('superadmin')->with('success','Tersimpan');
                }
            }else{
                return redirect('superadmin/resetpassword')->with('error','Gagal Menyimpan Periksa Kembali Password Anda');
            }
            
        }else{
            return redirect('superadmin/resetpassword')->with('error','Gagal Menyimpan Periksa Kembali Password Anda');
        }
    }
    public function index()
    {
        $profils=Proposal::where('status', '2')->get();

        $counts=Proposal::where('status', '1')->count();

        $unaproves=Proposal::where('status', '2')->count();

        return view ('superadmin.index', compact('profils', 'counts','unaproves'));
    }

    // Data Proposal


    public function listproposal()
    {
        $profils = Profil::orderBy( 'kabupaten' , 'DESC')->get();

        return view('superadmin.proposal.listproposal', compact('profils')); 
    }

    public function detailproposal($id)
    {
        $profil = Profil::find($id);
        $admin = $profil->admin;
        $proposal = $profil->proposal->first();
        $inventor = $profil->inventor->first();
        $kuesinventor = $profil->kuesinventor->first();
        return view('superadmin.proposal.lihatproposal', compact('profil', 'admin', 'proposal', 'inventor', 'kuesinventor'));
    }

    public function publishproposal(Request $request, $id)
    {
        $publish = Proposal::where('id', $id)->first();
        $publish->status =3;
        $publish->update();

        return redirect('/superadmin/listproposal')->with('success', 'Saved');
    }

    public function unpublishproposal(Request $request, $id)
    {
        $publish = Proposal::where('id', $id)->first();
        $publish->status =1;
        $publish->update();

        return redirect('/superadmin/listproposal')->with('success', 'Saved');
    }

    public function cheklist($id)
    {
        $profil = Profil::find($id);
        $proposal = $profil->proposal->first();


        return view('superadmin.proposal.cheklist', compact('profil', 'proposal'));
    }

    public function vote()
    {
        $profils = Profil::orderBy( 'nama' , 'DESC')->get();

        return view('superadmin.proposal.voter', compact('profils')); 
    }

    public function pemenang()
    {
        $profils = Profil::orderBy( 'nama' , 'DESC')->get();

        return view('superadmin.proposal.pemenang', compact('profils')); 
    }

    public function hasilvoting()
    {
        $profils = Profil::all();

        return view('superadmin.laporan.hasilvoting', compact('profils')); 
    }

    public function daftarpeserta()
    {
        $profils = Profil::orderBy('kabupaten', 'DESC')->get();

        return view('superadmin.laporan.daftarpeserta', compact('profils')); 
    }

    public function rekappenilaian()
    {
        $profils = Profil::orderBy('kabupaten', 'DESC')->get();

        return view('superadmin.laporan.rekappenilaian', compact('profils')); 
    }

     public function cetakproposal($id)
    {
        $profil=Profil::find($id);
        $admin=$profil->admin;
        $inventor=$profil->inventor->first();
        $proposal=$profil->proposal->first();
        $kuesinventor=$profil->kuesinventor;
        //return view('admin.cetakadmin_proposal',compact('profil','proposal','kuesinventor','admin','inventor'));
        $pdf = PDF::loadView('superadmin.proposal.cetakadmin_proposal',compact('profil','proposal','kuesinventor','admin','inventor'))
                ->setPaper('a4', 'potrait');
 
        return $pdf->stream();
    } 

    //Master Kabupaten

    public function daftarkabupaten()
    {
        $admins = Admin::orderBy('kabupaten', 'DESC')->get();

        return view('superadmin.kabupaten.daftarkabupaten', compact('admins')); 
    }

    public function detailkuesadmin($id)

    {
        $kues = Kuesadmin::find($id);

        return view('superadmin.kabupaten.detailkuesadmin', compact('kues'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.profil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
