<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $article=Article::all();
        return view('superadmin.article.berita')->with(['article'=>$article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('superadmin.article.tambahberita');
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
		$this->validate($request,[
			'judul'=>'required',
			'isi_berita'=>'required',
			'gambar'=>'required|image',
		]);
        $article= new Article();
        $article->judul=$request->input('judul');
        $article->isi=$request->input('isi_berita');
        $article->kategori=$request->input('kategori');
        $fileName="berita_".time().".jpeg";
        $request->file('gambar')->move('file/',$fileName);
        $article->gambar=$fileName;
        $article->save();
        return redirect('article')->with('success','Tersimpan');
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
        $article=Article::find($id);
        return view('superadmin.article.editberita')->with(['article'=>$article]);
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
		$this->validate($request,[
			'judul'=>'required',
			'isi_berita'=>'required',
			'gambar'=>'image',
		]);
        $article= Article::find($id);
        $article->judul=$request->input('judul');
        $article->isi=$request->input('isi_berita');
        $article->kategori=$request->input('kategori');
        $fileName="berita_".time().".jpeg";
		if ($request->hasFile('gambar')){
			$request->file('gambar')->move('file/',$fileName);
			$article->gambar=$fileName;
		}
        $article->save();
        return redirect('article')->with('success','Tersimpan');
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
        $article=Article::find($id);
        $article->delete();
        return redirect('article')->with('success','Terhapus');
    }
}
