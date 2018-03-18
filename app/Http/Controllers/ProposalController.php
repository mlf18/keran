<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Exception;
use App\Proposal;
use App\Admin;
use App\Inventor;
use App\Kuesinventor;
use App\Profil;
use App\Draftinventor;
use Auth;
class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('proposal.index');
        // return view('inventor.map.index');
    }
    public function get($filename){
        $entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('proposal')->get($entry->filename);
        return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profil=Auth::user()->profil;
        $admin=$profil->admin;
        if(isset($profil->inventor)){
            $inventor=$profil->inventor->first();
        }else{
            $inventor=[];
        }
        if (isset($profil->proposal)){
            $proposal=$profil->proposal;
        }else{
            $proposal=[];
        }
        if (isset($profil->kuesinventor)){
            $kuesinventor=$profil->kuesinventor;
        }else{
            $kuesinventor=[];
        }
        $proposal=$profil->proposal->first();
        if ($proposal->status==1){
            return redirect ('inventor')->with('success','Proposal Telah Dikirim');
        }else{
            return view('inventor.proposal.create')->with(['profil'=>$profil,'admin'=>$admin,'kuesinventor'=>$kuesinventor,'proposal'=>$proposal,'inventor'=>$inventor]);    
        }
        
    }
    public function draft($id){
        $profil=Auth::user()->profil;
        $admin=$profil->admin;
        $draft = Draftinventor::find($id);
        $proposal=$profil->proposal->first();
        if($proposal->status==1){
            return redirect ('inventor')->with('success','Proposal Telah Dikirim');
        }else{
            if (isset($draft)){
            return view('inventor.proposal.draft')->with(['draft'=>$draft,'profil'=>$profil,'admin'=>$admin]);
        }else{
            return redirect('proposal/create');
        }
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
        
        if ($request->input('submit')!='draft'){
             $this->validate($request,[
                  'proposal_abstrak'=>'required',
                'proposal_latar_belakang'=>'required',
                'proposal_maksud_tujuan'=>'required',
                'proposal_manfaat'=>'required',
                'proposal_spesifikasi'=>'required',
                'proposal_keunggulan'=>'required',
                'proposal_penerapan'=>'required',
                'proposal_perhitungan'=>'required',
                'proposal_prospek'=>'required',
                'proposal_file_1' => 'image|max:1024',
                'proposal_file_2' => 'image|max:1024',
                'proposal_file_3' => 'image|max:1024',
                'proposal_file_4' => 'image|max:1024',
                'proposal_surat' => 'mimes:pdf,jpeg,png,jpg|max:2048',
                'proposal_pendukung' => 'mimes:pdf,jpeg,png,jpg|max:2047',
                'proposal_daftar_riwayat'=>'mimes:pdf,jpeg,png,jpg|max:2047',
                'proposal_daftar_riwayat_2'=>'mimes:pdf,jpeg,png,jpg|max:2047',
                'proposal_daftar_riwayat_3'=>'mimes:pdf,jpeg,png,jpg|max:2047',
                'proposal_daftar_riwayat_4'=>'mimes:pdf,jpeg,png,jpg|max:2047',
                'proposal_pendukung' => 'mimes:pdf,jpg,jpeg,png|max:2047',
                'proposal_daftar_riwayat_hidup' => 'mimes:pdf,jpg,jpeg,png|max:2047',
                'proposal_foto_ktp' => 'mimes:pdf,jpeg,png,jpg|max:2047',
             ]);    
        $profil=Auth::user()->profil;
        // if (isset($profil->inventor)){
        //     $inventor=$profil->inventor->first();
        // }else{
        //     $inventor=new Inventor();
        // }
        $inventor=Inventor::where('profil_id','=',$profil->id)->first();
        $inventor->kategori=$request->input('bidang_perorangan');
        $inventor->nama=$profil->nama;
        $inventor->alamat=$profil->alamat;
        $inventor->pekerjaan=$request->input('pekerjaan_perorangan');
        $inventor->email=$profil->email;
        $inventor->no_telp=$profil->no_telp;
        $inventor->kabupaten=$profil->kabupaten;
        $inventor->kategori_kelompok=$request->input('bidang_kelompok');
        $inventor->nama_kelompok=$request->input('nama_kelompok');
        $inventor->nama_ketua=$request->input('ketua_kelompok');
        $inventor->alamat_kelompok=$request->input('alamat_kelompok');
        $inventor->email_kelompok=$request->input('alamat_email_kelompok');
        $inventor->no_telp_kelompok=$request->input('no_hp_kelompok');
        $inventor->anggota_1=$request->input('nama_anggota_kelompok');
        $inventor->anggota_2=$request->input('nama_anggota_kelompok_2');
        $inventor->anggota_3=$request->input('nama_anggota_kelompok_3');
        $inventor->anggota_4=$request->input('nama_anggota_kelompok_4');
        $inventor->judul=$request->input('karya_usul_kelompok')!=''?$request->input('karya_usul_kelompok'):$request->input('karya_usul_perorangan');
        $inventor->temuan=$request->input('temuan_baru_kelompok')!=''?$request->input('temuan_baru_kelompok'):$request->input('temuan_baru_perorangan');
        $inventor->pengembangan=$request->input('pengembangan_dari_kelompok')!=''?$request->input('pengembangan_dari_kelompok'):$request->input('pengembangan_dari_perorangan');
        $inventor->profil_id=$profil->id;
        if(!$inventor->save()){
		return redirect('inventor')->with('error','Terjadi Kesalah');
	}
        // if($request->input('submit')=="draft-profil"){
        //     $temuan->draft=1;
        // }else{
        //     $temuan->draft=0;
        // }
        // if (isset($profil->kuesinventor)){
        //     $temuan=$profil->kuesinventor;
        // }else{
        //     $temuan = new Kuesinventor();
        // }
        $temuan=Kuesinventor::where('profil_id','=',$profil->id)->first();
        $temuan->temuan_asli=$request->input('temuan_asli');
        $temuan->waktu_produksi=$request->input('waktu_produksi');
        $temuan->sudah_ada=$request->input('orisinalitas_alat');
        $temuan->ide_orang=$request->input('orisinalitas_ide');
        $temuan->komersial=$request->input('implementasi_komersil');
        $temuan->komersial_pihak=$request->input('implementasi_pihak');
        $temuan->asal_usul=$request->input('implementasi_asal_usul');
        $temuan->penarapan=$request->input('penerapan_temuan');
        $temuan->pelaku_penerapan=$request->input('penerapan_pelaku');
        $temuan->cakupan_penerapan=$request->input('penerapan_cukupan');
        $temuan->bahan_lokal=$request->input('bahan_baku_lokal');
        $temuan->kapasitas_produksi=$request->input('manfaat_produktifitas');
        $temuan->tenaga_kerja=$request->input('manfaat_lapangan_kerja');
        $temuan->prospek_tempat=$request->input('komersil_dimana');
        $temuan->prospek_cara=$request->input('komersil_cara');
        $temuan->biaya_produksi=$request->input('komersil_biaya');
        $temuan->omset=$request->input('komersil_omset');
        $temuan->asal_bahan=$request->input('komersil_bahan_baku');
        $temuan->quantity_bahan=$request->input('komersil_banyak');
        $temuan->orientasi=$request->input('komersil_kebutuhan');
        $temuan->profil_id=$profil->id;
        if (!$temuan->save()){
		return redirect('inventor')->with('error','Terjadi Kesalah');
	}
        // if (isset($profil->proposal)){
        //     $proposal=$profil->proposal;
        // }else{
        //     $proposal = new Proposal();
        // }
        $proposal=Proposal::where('profil_id','=',$profil->id)->first();
        $proposal->abstrak=$request->input('proposal_abstrak');
        $proposal->latar_belakang=$request->input('proposal_latar_belakang');
        $proposal->maksud=$request->input('proposal_maksud_tujuan');
        $proposal->manfaat=$request->input('proposal_manfaat');
        $proposal->spek_teknik=$request->input('proposal_spesifikasi');
        $proposal->keunggulan=$request->input('proposal_keunggulan');
        $proposal->penerapan=$request->input('proposal_penerapan');
        $proposal->biaya_produksi=$request->input('proposal_perhitungan');
        $proposal->prospek_bisnis=$request->input('proposal_prospek');
        // if($request->input('submit')=="draft-proposal"){
        //     $proposal->draft=1;
        // }else{
        //     $proposal->draft=0;
        // }
        if ($request->input('draft_id')!==NULL){
            $draft=Draftinventor::find($request->input('draft_id'));    
        }else{
            $draft=NULL;
        }
        if($request->hasFile('proposal_file_1')){
            $fileName='proposal_file_1_'.time().'.'.$request->file('proposal_file_1')->getClientOriginalExtension();
            $request->file('proposal_file_1')->move('file/', $fileName);
            $proposal->foto1_name=$fileName;
        }else{
            if (isset($draft)){
                if($draft->foto1_name!=''){
                    $proposal->foto1_name=$draft->foto1_name;
                }else{
                    return redirect('inventor/draft/'.$draft->id)->with('error','Tidak Dapat Menyimpan, Terdapat Field Yang Kosong');
                }
            }else{
                return redirect('proposal/create')->with('error','Tidak Dapat Menyimpan, Terdapat Field Yang Kosong');
            }
        }
        if($request->hasFile('proposal_file_2')){
            $fileName='proposal_file_2'.time().'.'.$request->file('proposal_file_2')->getClientOriginalExtension();
            $request->file('proposal_file_2')->move('file/', $fileName);
            $proposal->foto2_name=$fileName;
        }else{
            if (isset($draft)){
                if($draft->foto2_name!=''){
                    $proposal->foto2_name=$draft->foto2_name;
                }else{
                    $proposal->foto2_name='';
                }
            }else{
                $proposal->foto2_name='';
            }
        }
        if($request->hasFile('proposal_file_3')){
            $fileName='proposal_file_3_'.time().'.'.$request->file('proposal_file_3')->getClientOriginalExtension();
            $request->file('proposal_file_3')->move('file/', $fileName);
            $proposal->foto3_name=$fileName;
        }else{
			if (isset($draft)){
                if($draft->foto3_name!=''){
                    $proposal->foto3_name=$draft->foto3_name;
                }else{
                    $proposal->foto3_name='';
                }
            }else{
                $proposal->foto3_name='';
            }
        }
        if($request->hasFile('proposal_file_4')){
            $fileName='proposal_file_4'.time().'.'.$request->file('proposal_file_4')->getClientOriginalExtension();
            $request->file('proposal_file_4')->move('file/', $fileName);
            $proposal->foto4_name=$fileName;
        }else{
            if (isset($draft)){
                if($draft->foto4_name!=''){
                    $proposal->foto4_name=$draft->foto4_name;
                }else{
                    $proposal->foto4_name='';
                }
            }else{
                $proposal->foto4_name='';
            }
        }
        if($request->hasFile('proposal_surat')){
            $fileName='proposal_surat_'.time().'.'.$request->file('proposal_surat')->getClientOriginalExtension();
            $request->file('proposal_surat')->move('file/', $fileName);
            $proposal->suratpengantar_name=$fileName;
        }else{
            if (isset($draft)){
                if($draft->suratpengantar_name!=''){
                    $proposal->suratpengantar_name=$draft->suratpengantar_name;
                }else{
                    return redirect('inventor/draft/'.$draft->id)->with('error','Tidak Dapat Menyimpan, Terdapat Field Yang Kosong');
                }
            }else{
                return redirect('proposal/create')->with('error','Tidak Dapat Menyimpan, Terdapat Field Yang Kosong');
            }
        }
        // $fileName=time().'.jpeg';
        // $request->file('proposal_pendukung')->move('file/', $fileName);
        // $proposal->spk_name=$fileName;
        if($request->hasFile('proposal_pendukung')){
            $fileName='proposal_pendukung_'.time().'.'.$request->file('proposal_pendukung')->getClientOriginalExtension();
            $request->file('proposal_pendukung')->move('file/', $fileName);
            $proposal->lampiran1_name=$fileName;
        }else{
            if (isset($draft)){
                if($draft->lampiran1_name!=''){
                    $proposal->lampiran1_name=$draft->lampiran1_name;
                }else{
                    return redirect('inventor/draft/'.$draft->id)->with('error','Tidak Dapat Menyimpan, Terdapat Field Yang Kosong');
                }
            }else{
                return redirect('proposal/create')->with('error','Tidak Dapat Menyimpan, Terdapat Field Yang Kosong');
            }
        }
        if($request->hasFile('proposal_daftar_riwayat_1')){
            $fileName='proposal_daftar_riwayat_2_'.time().'.'.$request->file('proposal_daftar_riwayat_1')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_1')->move('file/', $fileName);
            $proposal->lampiran2_name=$fileName;
        }else{
            $proposal->lampiran2_name='';
        }
        if($request->hasFile('proposal_daftar_riwayat_2')){
            $fileName='proposal_daftar_riwayat_2_'.time().'.'.$request->file('proposal_daftar_riwayat_2')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_2')->move('file/', $fileName);
            $proposal->lampiran3_name=$fileName;
        }else{
            $proposal->lampiran3_name='';
        }
        if($request->hasFile('proposal_daftar_riwayat_3')){
            $fileName='proposal_daftar_riwayat_3_'.time().'.'.$request->file('proposal_daftar_riwayat_3')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_3')->move('file/', $fileName);
            $proposal->lampiran4_name=$fileName;
        }else{
            $proposal->lampiran4_name='';
        }
        if($request->hasFile('proposal_daftar_riwayat_4')){
            $fileName='proposal_daftar_riwayat_4_'.time().'.'.$request->file('proposal_daftar_riwayat_4')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_4')->move('file/', $fileName);
            $proposal->lampiran5_name=$fileName;
        }else{
            $proposal->lampiran5_name='';
        }
        if($request->hasFile('proposal_daftar_riwayat_hidup')){
            $fileName='proposal_daftar_riwayat_hidup_'.time().'.'.$request->file('proposal_daftar_riwayat_hidup')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_hidup')->move('file/', $fileName);
            $proposal->riwayathidup_name=$fileName;
        }else{
            if (isset($draft)){
                if($draft->riwayathidup_name!=''){
                    $proposal->riwayathidup_name=$draft->riwayathidup_name;
                }else{
                    return redirect('inventor/draft/'.$draft->id)->with('error','Tidak Dapat Menyimpan, Terdapat Field Yang Kosong');
                }
            }else{
                return redirect('proposal/create')->with('error','Tidak Dapat Menyimpan, Terdapat Field Yang Kosong');
            }
        }
        if($request->hasFile('proposal_foto_ktp')){
            $fileName='proposal_foto_ktp_'.time().'.'.$request->file('proposal_foto_ktp')->getClientOriginalExtension();
            $request->file('proposal_foto_ktp')->move('file/', $fileName);
            $proposal->ktp_name=$fileName;
        }else{
            if (isset($draft)){
                if($draft->ktp_name!=''){
                    $proposal->ktp_name=$draft->ktp_name;
                }else{
                    return redirect('inventor/draft/'.$draft->id)->with('error','Tidak Dapat Menyimpan, Terdapat Field Yang Kosong');
                }
            }else{
                return redirect('proposal/create')->with('error','Tidak Dapat Menyimpan, Terdapat Field Yang Kosong');
            }
        }
        $proposal->status=2;
        $proposal->profil_id=$profil->id;
        $draft=Draftinventor::where('profil_id','=',$proposal->profil_id);
        if ($proposal->save()){
//		return redirect('inventor')->with('error','Terjadi Kesalah');
	}
        if (isset($draft)){
            $draft->delete();
        }
        }else{
        $profil=Auth::user()->profil;
        $prevdraft=Draftinventor::where('profil_id','=',$profil->id)->get()->first();
        $draft = new Draftinventor();
        $draft->kategori=$request->input('bidang_perorangan');
        $draft->nama=$profil->nama;
        $draft->alamat=$profil->alamat;
        $draft->pekerjaan=$request->input('pekerjaan_perorangan');
        $draft->email=$profil->email;
        $draft->no_telp=$profil->no_telp;
        $draft->kategori_kelompok=$request->input('bidang_kelompok');
        $draft->nama_kelompok=$request->input('nama_kelompok');
        $draft->nama_ketua=$request->input('ketua_kelompok');
        $draft->alamat_kelompok=$request->input('alamat_kelompok');
        $draft->email_kelompok=$request->input('alamat_email_kelompok');
        $draft->no_telp_kelompok=$request->input('no_hp_kelompok');
        $draft->anggota_1=$request->input('nama_anggota_kelompok');
        $draft->anggota_2=$request->input('nama_anggota_kelompok_2');
        $draft->anggota_3=$request->input('nama_anggota_kelompok_3');
        $draft->anggota_4=$request->input('nama_anggota_kelompok_4');
        $draft->temuan=$request->input('karya_usul_kelompok');
        $draft->judul=$request->input('temuan_baru_kelompok');
        $draft->pengembangan=$request->input('pengembangan_dari_kelompok');
		$draft->temuan=$request->input('temuan_baru_kelompok')!=''?$request->input('temuan_baru_kelompok'):$request->input('temuan_baru_perorangan');
        $draft->judul=$request->input('karya_usul_kelompok')!=''?$request->input('karya_usul_kelompok'):$request->input('karya_usul_perorangan');
        $draft->pengembangan=$request->input('pengembangan_dari_kelompok')!=''?$request->input('pengembangan_dari_kelompok'):$request->input('pengembangan_dari_perorangan');
        $draft->temuan_asli=$request->input('temuan_asli');
        $draft->waktu_produksi=$request->input('waktu_produksi');
        $draft->sudah_ada=$request->input('orisinalitas_alat');
        $draft->ide_orang=$request->input('orisinalitas_ide');
        $draft->komersial=$request->input('implementasi_komersil');
        $draft->komersial_pihak=$request->input('implementasi_pihak');
        $draft->asal_usul=$request->input('implementasi_asal_usul');
        $draft->penarapan=$request->input('penerapan_temuan');
        $draft->pelaku_penerapan=$request->input('penerapan_pelaku');
        $draft->cakupan_penerapan=$request->input('penerapan_cukupan');
        $draft->bahan_lokal=$request->input('bahan_baku_lokal');
        $draft->kapasitas_produksi=$request->input('manfaat_produktifitas');
        $draft->tenaga_kerja=$request->input('manfaat_lapangan_kerja');
        $draft->prospek_tempat=$request->input('komersil_dimana');
        $draft->prospek_cara=$request->input('komersil_cara');
        $draft->biaya_produksi=$request->input('komersil_biaya');
        $draft->omset=$request->input('komersil_omset');
        $draft->asal_bahan=$request->input('komersil_bahan_baku');
        $draft->quantity_bahan=$request->input('komersil_banyak');
        $draft->orientasi=$request->input('komersil_kebutuhan');
        $draft->profil_id=$profil->id;
        $draft->abstrak=$request->input('proposal_abstrak');
        $draft->latar_belakang=$request->input('proposal_latar_belakang');
        $draft->maksud=$request->input('proposal_maksud_tujuan');
        $draft->manfaat=$request->input('proposal_manfaat');
        $draft->spek_teknik=$request->input('proposal_spesifikasi');
        $draft->keunggulan=$request->input('proposal_keunggulan');
        $draft->penerapan=$request->input('proposal_penerapan');
        $draft->biaya_produksi_proposals=$request->input('proposal_perhitungan');
        $draft->prospek_bisnis=$request->input('proposal_prospek');
        // if($request->input('submit')=="draft-proposal"){
        //     $draft->draft=1;
        // }else{
        //     $draft->draft=0;
        // 
        if($request->hasFile('proposal_file_1')){
            $fileName='proposal_file_1_'.time().'.'.$request->file('proposal_file_1')->getClientOriginalExtension();
            $request->file('proposal_file_1')->move('file/', $fileName);
            $draft->foto1_name=$fileName;
        }else{
            if (count($prevdraft)>0){
                $draft->foto1_name=$prevdraft->foto1_name;
            }else{
                $draft->foto1_name='';
            }
        }
        if($request->hasFile('proposal_file_2')){
            $fileName='proposal_file_2'.time().'.'.$request->file('proposal_file_2')->getClientOriginalExtension();
            $request->file('proposal_file_2')->move('file/', $fileName);
            $draft->foto2_name=$fileName;
        }else{
            if (count($prevdraft)>0){
                $draft->foto2_name=$prevdraft->foto2_name;
            }else{
                $draft->foto2_name='';
            }
            
        }
        if($request->hasFile('proposal_file_3')){
            $fileName='proposal_file_3_'.time().'.'.$request->file('proposal_file_3')->getClientOriginalExtension();
            $request->file('proposal_file_3')->move('file/', $fileName);
            $draft->foto3_name=$fileName;
        }else{
            if (count($prevdraft)>0){
                $draft->foto3_name=$prevdraft->foto3_name;
            }else{
                $draft->foto3_name='';
            }
            
        }
        if($request->hasFile('proposal_file_4')){
            $fileName='proposal_file_4'.time().'.'.$request->file('proposal_file_4')->getClientOriginalExtension();
            $request->file('proposal_file_4')->move('file/', $fileName);
            $draft->foto4_name=$fileName;
        }else{
            if (count($prevdraft)>0){
                $draft->foto4_name=$prevdraft->foto4_name;
            }else{
                $draft->foto4_name='';
            }
            
        }
        if($request->hasFile('proposal_surat')){
            $fileName='proposal_surat_'.time().'.'.$request->file('proposal_surat')->getClientOriginalExtension();
            $request->file('proposal_surat')->move('file/', $fileName);
            $draft->suratpengantar_name=$fileName;
        }else{
            if (count($prevdraft)>0){
                $draft->suratpengantar_name=$prevdraft->suratpengantar_name;
            }else{
                $draft->suratpengantar_name='';
            }
            
        }
        // $fileName=time().'.jpeg';
        // $request->file('proposal_pendukung')->move('file/', $fileName);
        // $draft->spk_name=$fileName;
        if($request->hasFile('proposal_pendukung')){
            $fileName='proposal_pendukung_'.time().'.'.$request->file('proposal_pendukung')->getClientOriginalExtension();
            $request->file('proposal_pendukung')->move('file/', $fileName);
            $draft->lampiran1_name=$fileName;
        }else{
            if (count($prevdraft)>0){
                $draft->lampiran1_name=$prevdraft->lampiran1_name;
            }else{
                $draft->lampiran1_name='';
            }
            
        }
        if($request->hasFile('proposal_daftar_riwayat_1')){
            $fileName='proposal_daftar_riwayat_2_'.time().'.'.$request->file('proposal_daftar_riwayat_1')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_1')->move('file/', $fileName);
            $draft->lampiran2_name=$fileName;
        }else{
            if (count($prevdraft)>0){
                $draft->lampiran2_name=$prevdraft->lampiran2_name;
            }else{
                $draft->lampiran2_name='';
            }
            
        }
        if($request->hasFile('proposal_daftar_riwayat_2')){
            $fileName='proposal_daftar_riwayat_2_'.time().'.'.$request->file('proposal_daftar_riwayat_2')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_2')->move('file/', $fileName);
            $draft->lampiran3_name=$fileName;
        }else{
            if (count($prevdraft)>0){
                $draft->lampiran3_name=$prevdraft->lampiran3_name;
            }else{
                $draft->lampiran3_name='';
            }
            
        }
        if($request->hasFile('proposal_daftar_riwayat_3')){
            $fileName='proposal_daftar_riwayat_3_'.time().'.'.$request->file('proposal_daftar_riwayat_3')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_3')->move('file/', $fileName);
            $draft->lampiran4_name=$fileName;
        }else{
            if (count($prevdraft)>0){
                $draft->lampiran4_name=$prevdraft->lampiran4_name;
            }else{
                $draft->lampiran4_name='';
            }
            
        }
        if($request->hasFile('proposal_daftar_riwayat_4')){
            $fileName='proposal_daftar_riwayat_4_'.time().'.'.$request->file('proposal_daftar_riwayat_4')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_4')->move('file/', $fileName);
            $draft->lampiran5_name=$fileName;
        }else{
            if (count($prevdraft)>0){
                $draft->lampiran5_name=$prevdraft->lampiran5_name;
            }else{
                $draft->lampiran5_name='';
            }
            
        }
        if($request->hasFile('proposal_daftar_riwayat_hidup')){
            $fileName='proposal_daftar_riwayat_hidup_'.time().'.'.$request->file('proposal_daftar_riwayat_hidup')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_hidup')->move('file/', $fileName);
            $draft->riwayathidup_name=$fileName;
        }else{
            if (count($prevdraft)>0){
                $draft->riwayathidup_name=$prevdraft->riwayathidup_name;
            }else{
                $draft->riwayathidup_name='';
            }
            
        }
        if($request->hasFile('proposal_foto_ktp')){
            $fileName='proposal_foto_ktp_'.time().'.'.$request->file('proposal_foto_ktp')->getClientOriginalExtension();
            $request->file('proposal_foto_ktp')->move('file/', $fileName);
            $draft->ktp_name=$fileName;
        }else{
            if (count($prevdraft)>0){
                $draft->ktp_name=$prevdraft->ktp_name;
            }else{
                $draft->ktp_name='';
            }
            
        }
        try{
            if (count($prevdraft)>0){
                $prevdraft->delete();    
            }
        }catch (Exception $e){
            return $e->getMessage();
        }        
        $draft->profil_id=Auth::user()->profil->id;
        $draft->save();
		return redirect('inventor/draft/'.$draft->id)->with('success','Tersimpan');
        }
        return redirect('inventor')->with('success','Tersimpan');
        // return redirect('/proposal/create')->with('success', 'Saved');
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
        $profil=Auth::user()->profil;
        $admin=$profil->admin;
        if(isset($profil->inventor)){
            $inventor=$profil->inventor->first();
        }else{
            $inventor=[];
        }
        if (isset($profil->proposal)){
            $proposal=$profil->proposal;
        }else{
            $proposal=[];
        }
        if (isset($profil->kuesinventor)){
            $kuesinventor=$profil->kuesinventor;
        }else{
            $kuesinventor=[];
        }
        $proposal=$profil->proposal->first();
        
        try{
            return view('inventor.proposal.lihat')->with(['profil'=>$profil,'admin'=>$admin,'kuesinventor'=>$kuesinventor,'proposal'=>$proposal,'inventor'=>$inventor]);    
        }catch(Exception $e){
            return $e->getMessage();
        }

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
