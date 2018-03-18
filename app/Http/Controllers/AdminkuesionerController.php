<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kuesadmin;
use App\Draftadmin;
use Auth;
use Exception;
class AdminkuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$kues=Kuesadmin::where('admin_id','=',Auth::user()->admin->id)->first();
		if (count($kues) <= 0){
			return view('admin.kuesioner')->with('kues',$kues);
		}else{
			return redirect('adminkuesioner/'.Auth::user()->admin->id);
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
        //
        if($request->input('submit')!='draft'){
			$adminkues=Kuesadmin::where('admin_id','=',Auth::user()->admin->id)->get();
			if (count($adminkues) > 0){	
			try{
				$adminkues->delete();
			}catch(Exception $e){
				return $e->getMessage();
			}
			}
        $adminkues = new Kuesadmin();
        if ($request->input('draft_id')!==NULL){
            $draft=Draftadmin::find($request->input('draft_id'));    
        }else{
            $draft=NULL;
        }
        $adminkues->alokasi_anggaran= $request->input('alokasi_anggaran');
        $adminkues->perda=$request->input('perda');
        if($request->hasFile('lampiranperda1_name')){
            $fileName='lampiranperda1_'.time().'.'.$request->file('lampiranperda1_name')->getClientOriginalExtension();
            $request->file('lampiranperda1_name')->move('file/', $fileName);
            $adminkues->lampiranperda1_name=$fileName;
        }else{
            if(isset($draft)){
                $adminkues->lampiranperda1_name=$draft->lampiranperda1_name;
            }else{
                $adminkues->lampiranperda1_name='';
            }
        }
        if($request->hasFile('lampiranperda2_name')){
            $fileName='lampiranperda2_'.time().'.'.$request->file('lampiranperda2_name')->getClientOriginalExtension();
            $request->file('lampiranperda2_name')->move('file/', $fileName);
            $adminkues->lampiranperda2_name=$fileName;
        }else{
            if(isset($draft)){
                $adminkues->lampiranperda2_name=$draft->lampiranperda2_name;
            }else{
                $adminkues->lampiranperda2_name='';
            }
        }
        if($request->hasFile('lampiranperda3_name')){
            $fileName='lampiranperda3_'.time().'.'.$request->file('lampiranperda3_name')->getClientOriginalExtension();
            $request->file('lampiranperda3_name')->move('file/', $fileName);
            $adminkues->lampiranperda3_name=$fileName;
        }else{
            if(isset($draft)){
                $adminkues->lampiranperda3_name=$draft->lampiranperda3_name;
            }else{
                $adminkues->lampiranperda3_name='';
            }
        }
        $adminkues->mou=$request->input('mou');
        if($request->hasFile('lampiranmou1_name')){
            $fileName='lampiranmou1_'.time().'.'.$request->file('lampiranmou1_name')->getClientOriginalExtension();
            $request->file('lampiranmou1_name')->move('file/', $fileName);
            $adminkues->lampiranmou1_name=$fileName;
        }else{
            if(isset($draft)){
                $adminkues->lampiranmou1_name=$draft->lampiranmou1_name;
            }else{
                $adminkues->lampiranmou1_name='';
            }
        }
        if($request->hasFile('lampiranmou2_name')){
            $fileName='lampiranmou2_'.time().'.'.$request->file('lampiranmou2_name')->getClientOriginalExtension();
            $request->file('lampiranmou2_name')->move('file/', $fileName);
            $adminkues->lampiranmou2_name=$fileName;
        }else{
            if(isset($draft)){
                $adminkues->lampiranmou2_name=$draft->lampiranmou2_name;
            }else{
                $adminkues->lampiranmou2_name='';
            }
        }
        if($request->hasFile('lampiranmou3_name')){
            $fileName='lampiranmou3_'.time().'.'.$request->file('lampiranmou3_name')->getClientOriginalExtension();
            $request->file('lampiranmou3_name')->move('file/', $fileName);
            $adminkues->lampiranmou3_name=$fileName;
        }else{
            if(isset($draft)){
                $adminkues->lampiranmou3_name=$draft->lampiranmou3_name;
            }else{
                $adminkues->lampiranmou3_name='';
            }
        }
        $adminkues->lombakab=$request->input('lombakab');
        $adminkues->pamerankab=$request->input('pamerankab');
        $adminkues->jumlah_lombakab=$request->input('jumlah_lombakab');
        if($request->hasFile('lampiranjumlah_lombakab')){
            $fileName='lampiranjumlah_lombakab_'.'.'.time().$request->file('lampiranjumlah_lombakab')->getClientOriginalExtension();
            $request->file('lampiranjumlah_lombakab')->move('file/', $fileName);
            $adminkues->lampiranlomba_name=$fileName;
        }else{
            if(isset($draft)){
                $adminkues->lampiranlomba_name=$draft->lampiranlomba_name;
            }else{
                $adminkues->lampiranlomba_name='';
            }
        }
        $adminkues->jumlah_pamerankab=$request->input('jumlah_pamerankab');
        if($request->hasFile('lampiranjumlah_pamerankab')){
            $fileName='lampiranjumlah_pamerankab_'.'.'.time().$request->file('lampiranjumlah_pamerankab')->getClientOriginalExtension();
            $request->file('lampiranjumlah_pamerankab')->move('file/', $fileName);
            $adminkues->lampiranpameran_name=$fileName;
        }else{
            if(isset($draft)){
                $adminkues->lampiranpameran_name=$draft->lampiranpameran_name;
            }else{
                $adminkues->lampiranpameran_name='';
            }
        }
        $adminkues->admin_id=Auth::user()->admin->id;
        $adminkues->nama_kabupaten=Auth::user()->admin->kabupaten;
        $draft=Draftadmin::where('admin_id','=',$adminkues->admin_id);
        $adminkues->save();
        $draft->delete();
        return redirect('admin')->with('success','Tersimpan');
        }else{
            // $adminkues=Auth::user()->Kuesadmin;
            if ($request->input('draft_id')!=''){
                try{
                    $draft=Draftadmin::find($request->input('draft_id'))->first();        
                }catch (Exception $e){
                    return $e->getMessage();
                }
            }else{
                $draft=NULL;
            }
            $adminkues=new Draftadmin();
            $adminkues->alokasi_anggaran= $request->input('alokasi_anggaran');
            $adminkues->perda=$request->input('perda');
            if($request->hasFile('lampiranperda1_name')){
                $fileName='lampiranperda1_'.time().'.'.$request->file('lampiranperda1_name')->getClientOriginalExtension();
                $request->file('lampiranperda1_name')->move('file/', $fileName);
                $adminkues->lampiranperda1_name=$fileName;
            }else{
                if(isset($draft)){
                    $adminkues->lampiranperda1_name=$draft->lampiranperda1_name;
                }
            }
            if($request->hasFile('lampiranperda2_name')){
                $fileName='lampiranperda2_'.time().'.'.$request->file('lampiranperda2_name')->getClientOriginalExtension();
                $request->file('lampiranperda2_name')->move('file/', $fileName);
                $adminkues->lampiranperda2_name=$fileName;
            }else{
                if(isset($draft)){
                    $adminkues->lampiranperda2_name=$draft->lampiranperda2_name;
                }
            }
            if($request->hasFile('lampiranperda3_name')){
                $fileName='lampiranperda3_'.time().'.'.$request->file('lampiranperda3_name')->getClientOriginalExtension();
                $request->file('lampiranperda3_name')->move('file/', $fileName);
                $adminkues->lampiranperda3_name=$fileName;
            }else{
                if(isset($draft)){
                    $adminkues->lampiranperda3_name=$draft->lampiranperda3_name;
                }
            }
            $adminkues->mou=$request->input('mou');
            if($request->hasFile('lampiranmou1_name')){
                $fileName='lampiranmou1_'.time().'.'.$request->file('lampiranmou1_name')->getClientOriginalExtension();
                $request->file('lampiranmou1_name')->move('file/', $fileName);
                $adminkues->lampiranmou1_name=$fileName;
            }else{
                if(isset($draft)){
                    $adminkues->lampiranmou1_name=$draft->lampiranmou1_name;
                }
            }
            if($request->hasFile('lampiranmou2_name')){
                $fileName='lampiranmou2_'.time().'.'.$request->file('lampiranmou2_name')->getClientOriginalExtension();
                $request->file('lampiranmou2_name')->move('file/', $fileName);
                $adminkues->lampiranmou2_name=$fileName;
            }else{
                if(isset($draft)){
                    $adminkues->lampiranmou2_name=$draft->lampiranmou2_name;
                }
            }
            if($request->hasFile('lampiranmou3_name')){
                $fileName='lampiranmou3_'.time().'.'.$request->file('lampiranmou3_name')->getClientOriginalExtension();
                $request->file('lampiranmou3_name')->move('file/', $fileName);
                $adminkues->lampiranmou3_name=$fileName;
            }else{
                if(isset($draft)){
                    $adminkues->lampiranmou3_name=$draft->lampiranmou3_name;
                }
            }
            $adminkues->lombakab=$request->input('lombakab');
            $adminkues->pamerankab=$request->input('pamerankab');
            $adminkues->jumlah_lombakab=$request->input('jumlah_lombakab');
            if($request->hasFile('lampiranjumlah_lombakab')){
                $fileName='lampiranjumlah_lombakab_'.'.'.time().$request->file('lampiranjumlah_lombakab')->getClientOriginalExtension();
                $request->file('lampiranjumlah_lombakab')->move('file/', $fileName);
                $adminkues->lampiranlomba_name=$fileName;
            }else{
                if(isset($draft)){
                    $adminkues->lampiranlomba_name=$draft->lampiranlomba_name;
                }
            }
            $adminkues->jumlah_pamerankab=$request->input('jumlah_pamerankab');
            if($request->hasFile('lampiranjumlah_pamerankab')){
                $fileName='lampiranjumlah_pamerankab_'.'.'.time().$request->file('lampiranjumlah_pamerankab')->getClientOriginalExtension();
                $request->file('lampiranjumlah_pamerankab')->move('file/', $fileName);
                $adminkues->lampiranpameran_name=$fileName;
            }else{
                if(isset($draft)){
                    $adminkues->lampiranpameran_name=$draft->lampiranpameran_name;
                }
            }
            $adminkues->admin_id=Auth::user()->admin->id;
            $adminkues->nama_kabupaten=Auth::user()->admin->kabupaten;
			if (isset($draft)){
				try{
					$draft->delete();
				}catch(Exception $e){
					return $e->getMessage();
				}
			}
            $adminkues->save();
            return redirect('admin/draft/'.$adminkues->id)->with('success','Tersimpan');
            }
        
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
		$kues=Kuesadmin::where('admin_id','=',Auth::user()->admin->id)->first();
		if (count($kues) <= 0){
			$draft=Draftadmin::where('admin_id','=',Auth::user()->admin->id)->first();
			if (count($draft) > 0){
				return redirect('admin/draft/'.$draft->id);
			}else{
				return redirect('adminkuesioner/create');
			}
		}else{
			return view ('admin.lihatkues')->with('kues',$kues);
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
