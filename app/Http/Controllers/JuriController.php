<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Profil;

use App\User;

use App\Proposal;

use App\Kuesinventor;

use App\Inventor;

use PDF;


class JuriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function profil()
    {
        return view('juri.profil');
    }
    public function datapeserta()
    {
        $profils = Profil::orderBy('kabupaten', 'Desc')->get();
        return view('juri.datapeserta', compact('profils'));
    }

    public function lihatpeserta()
    {
        // 
    }
    public function formatpenilaian()
    {
        return view('juri.formatpenilaian');
    }


    public function simpanpenilaian()
    {
        // 
    }

    public function resetpassword(){
        return view('juri.resetpasword');
    }
    public function storepassword(Request $request){
        if ($request->input('password')==$request->input('confirm_password')){
            $user=Auth::user();
            if (\Hash::check($request->input('password_lama'), $user->password)){
                $user->password=bcrypt($request->input('password'));
                if($user->save()){
                    return redirect('juri')->with('success','Tersimpan');
                }
            }else{
                return redirect('juri/resetpassword')->with('error','Gagal Menyimpan Periksa Kembali Password Anda');
            }
            
        }else{
            return redirect('juri/resetpassword')->with('error','Gagal Menyimpan Periksa Kembali Password Anda');
        }
    }
    public function index()
    {
        $profil = Profil::orderBy('id', 'Desc')->paginate(10);

        return view('juri.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
