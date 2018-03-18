<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
use App\Slider;
use App\Panduan;
use App\Daftarpemenang;
use App\Footer;
use App\Voter;
use App\Voterproposal;
use App\Profil;
use DB;
use Mail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nav=[
            'active','','','',''
        ];
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();	
        return view('content.beranda.index')->with(['navbar'=>$nav,'footer'=>$footer,'slider'=>$slider]);
    }
    public function artikel()
    {
        $articles = Article::orderBy('created_at','desc')->get();
        $nav=[
            '','','','',''
        ];
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();
        return view('content.artikel.index')->with(['navbar'=>$nav,'articles'=>$articles,'footer'=>$footer,'slider'=>$slider]);
    }
    public function cariArtikel(Request $request)
    {
        $articles = Article::where('judul','like','%'.$request->input('judul').'%')->orderBy('created_at','desc')->get();
        $nav=[
            '','','','',''
        ];
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();
        return view('content.artikel.index')->with(['navbar'=>$nav,'articles'=>$articles,'footer'=>$footer,'slider'=>$slider]);
    }
    public function showArtikel($id){
        $article = Article::find($id);
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();
        return view('content.artikel.show')->with(['article'=>$article,'footer'=>$footer,'slider'=>$slider]);
    }
    public function panduan(){
        $nav=[
            '','','','',''
        ];
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();
        $panduans = Panduan::where('status','tampil')->get();
        return view('content.panduan.index')->with(['navbar'=>$nav,'panduans'=>$panduans,'footer'=>$footer,'slider'=>$slider]);
    }
    public function direktori(){
        $nav=[
            '','','active','',''
        ];
        $proposal=DB::table('profils')
                ->leftJoin('proposals','profils.id','=','proposals.profil_id')
                ->leftJoin('inventors','profils.id','=','inventors.profil_id')
                ->where('proposals.status','=',3)
                ->get();
        $slider=Slider::where('status','Tampil')->get();
        $footer=Footer::all();
        $locationsPeta=[];
        $i=0;
        foreach ($proposal as $p) {
            if ($p->latitude !='' && $p->longitude !=''){
                $locationsPeta[$i]=$p;
                $i++;
            }
        }
        return view('content.direktori.index')->with(['locationsPeta'=>$locationsPeta,'navbar'=>$nav,'footer'=>$footer,'slider'=>$slider]);
    }
    public function direktoriCari (Request $request){
        if ($request->input('kabupaten')!='' && $request->input('bidang')!=''){
            $proposal=DB::table('profils')
                ->leftJoin('proposals','profils.id','=','proposals.profil_id')
                ->leftJoin('inventors','profils.id','=','inventors.profil_id')
                ->where('proposals.status','=',3)
                ->where('kabupaten',$request->input('kabupaten'))
                ->where('bidang',$request->input('bidang'))
                ->get();
        }elseif ($request->input('kabupaten')!='' && $request->input('bidang')==''){
            $proposal=DB::table('profils')
                ->leftJoin('proposals','profils.id','=','proposals.profil_id')
                ->leftJoin('inventors','profils.id','=','inventors.profil_id')
                ->where('proposals.status','=',3)
                ->where('kabupaten',$request->input('kabupaten'))
                ->get();
        }elseif ($request->input('kabupaten')=='' && $request->input('bidang')!=''){
            $proposal=DB::table('profils')
                ->leftJoin('proposals','profils.id','=','proposals.profil_id')
                ->leftJoin('inventors','profils.id','=','inventors.profil_id')
                ->where('proposals.status','=',3)
                ->where('bidang',$request->input('bidang'))
                ->get();
        }else{
            return redirect ('/direktori');
        }
        $locationsPeta=[];
        $i=0;
        $slider=Slider::where('status','Tampil')->get();
        $footer=Footer::all();
        foreach ($proposal as $p) {
            if ($p->latitude !='' && $p->longitude !=''){
                $locationsPeta[$i]=$p;
                $i++;
            }
        }
        // return ([$locationsPeta]);
        return view('content.direktori.index')->with(['locationsPeta'=>$locationsPeta,'navbar'=>$nav,'footer'=>$footer,'slider'=>$slider]);
    }
    public function polling(){
        $nav=[
            '','','','active',''
        ];
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();
        $proposal=DB::table('profils')
                ->join('proposals','profils.id','=','proposals.profil_id')
                ->join('inventors','profils.id','=','inventors.profil_id')
                ->where('proposals.status','=',3)
                ->get()
        ;
        $profil=Profil::all();
        return view('content.polling.index')->with(['navbar'=>$nav,'footer'=>$footer,'slider'=>$slider,'proposal'=>$proposal,'profil'=>$profil]);
    }
    public function pollingKat($kat){
        $nav=[
            '','','','active',''
        ];
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();
        $proposal=DB::table('profils')
                ->join('proposals','profils.id','=','proposals.profil_id')
                ->join('inventors','profils.id','=','inventors.profil_id')
                ->where('proposals.status','=',3)
                ->where('inventors.kategori','=',$kat)
                ->orWhere('inventors.kategori_kelompok','=',$kat)
                ->get()
        ;
        return view('content.polling.index')->with(['navbar'=>$nav,'footer'=>$footer,'slider'=>$slider,'proposal'=>$proposal]);
    }
    public function pollingKab($kab){
        $nav=[
            '','','','active',''
        ];
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();
        $proposal=DB::table('profils')
                ->join('proposals','profils.id','=','proposals.profil_id')
                ->join('inventors','profils.id','=','inventors.profil_id')
                ->where('inventors.kabupaten',$kab)
                ->where('proposals.status','=',3)
                ->get()
        ;
        // return ([$proposal]);
        return view('content.polling.index')->with(['navbar'=>$nav,'footer'=>$footer,'slider'=>$slider,'proposal'=>$proposal]);
    }
    public function tentang(){
        $nav=[
            '','','','active',''
        ];
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();
        return view('content.tentang.index')->with(['navbar'=>$nav,'footer'=>$footer,'slider'=>$slider]);
    }
    public function pendaftaran(){
        $nav=[
            '','','','active',''
        ];
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();
        return view('content.pendaftaran.index')->with(['navbar'=>$nav,'footer'=>$footer,'slider'=>$slider]);
    }
    public function daftarpemenang(){
        $nav=[
            '','','','',''
        ];
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();
        $daftars=Daftarpemenang::where('status','tampil')->get();
        return view('content.daftarpemenang.index')->with(['navbar'=>$nav,'daftars'=>$daftars,'footer'=>$footer,'slider'=>$slider]);
    }
    public function rekap(){
        $nav=[
            '','','','',''
        ];
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();
        $polkab=DB::table('inventors')
        ->select(DB::raw('count(inventors.kabupaten) as kab_count,inventors.kabupaten'))
        ->join('proposals','inventors.profil_id','=','proposals.profil_id')
        ->where('inventors.kabupaten','<>','')
        ->where('proposals.status','=',3)
        ->groupBy('kabupaten')
        ->get();
        return view('content.rekap.index')->with(['navbar'=>$nav,'footer'=>$footer,'slider'=>$slider,'polkab'=>$polkab]);
    }
    public function pollingdetail($id){
        $nav=[
            '','','','active',''
        ];
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();
        $proposal=DB::table('profils')
                ->join('proposals','profils.id','=','proposals.profil_id')
                ->join('inventors','profils.id','=','inventors.profil_id')
                ->where('profils.id','=',$id)
                ->get()
        ;
        $profil=Profil::find($id);
        return view('content.polling.detail')->with(['navbar'=>$nav,'footer'=>$footer,'slider'=>$slider,'proposal'=>$proposal,'profil'=>$profil]);
    }
    public function pollingLogin($id) {
        $nav=[
            '','','','active',''
        ];
        $footer=Footer::all();
        $slider=Slider::where('status','Tampil')->get();
        return view('content.polling.login')->with(['navbar'=>$nav,'footer'=>$footer,'slider'=>$slider,'id'=>$id]);   
    }
    public function pollingStore(Request $request){
        $voter=Voter::where('email',$request->input('email'))->get()->first();
        $profil=Profil::find($request->input('profil_id'));
        if (count($voter) < 1){
            $voter=new Voter();
            $voter->name=$request->input('nama');
            $voter->email=$request->input('email');
            $voter->save();
        }else{
            $ss=$voter->profil()->where('profil_id','=',$request->input('profil_id'))->get();
            if ($ss->count() > 0){
                return redirect('/polling')->with('error','Anda Telah Malakukan Voting');    
            }
        }
        if ($voter->profil->count() < 6){
            $tok=str_random(40);
            $voter->profil()->attach($profil->id,['token'=>$tok,'status'=>0]);
            $data = array('token'=>$tok, "email" => $voter->email);
           try{
                Mail::send('content.email.mail', compact('data'), function($message) use ($data) {
                    $message->to($data['email'], 'Konfirmasi Voting')
                            ->subject('Konfirmasi Voting');
                    $message->from('lukmanfikri46@gmail.com','Krenova 2018');
                });    
                return redirect('/polling')->with('success','Berhasil harap lakukan konfirmasi');
            }catch (Exception $e){
                return $e->getMessage();
            } 
        }else{
            return redirect('/polling')->with('error','Jumlah Voting Melebihi Batas');
        }        
    }
    public function konfirmasiVoting($token,$email){
        $voter=Voter::where('email',$email)->get()->first();
        foreach ($voter->profil as $p ) {
            # code...
            if ($p->pivot["token"]==$token){
                $p->pivot['token']='';
                $p->pivot['status']=1;
                $p->pivot->save();
                return redirect('/polling')->with('success','Konfirmasi Berhasil');
            }
        }
        return redirect('/polling')->with('error','Konfirmasi Gagal');
    }
    public function sendMail(){
        $data = array('name'=>"Sam Jose", "body" => "Test mail");
        // return view('content.email.mail', compact('data'));
        try{
            Mail::send('content.email.mail', $data, function($message) {
                $message->to('lukman_fikri46@yahoo.com', 'Artisans Web')
                        ->subject('Artisans Web Testing Mail');
                $message->from('lukmanfikri46@gmail.com','do not reply');
            });    
        }catch (Exception $e){
            return $e->getMessage();
        }
        
    }
}
