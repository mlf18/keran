@extends('content.template.app')
@section('content')
<br/>
<br/><br/>
<div class="container">
    <div class="row">
      <!-- /.col-lg-3 -->
        <div class="row">
          <!-- @foreach($proposal as $p) -->
          <div class="col-lg-12 col-md-12 mb-4">
            <div class="card h-100">
              <a href="#"><img class="img-responsive card-img-top" src="{{url('file/'.$profil->proposal->first()->foto1_name)}}" width="600px" height="600px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title" align="center">
                  <a href="" >{{$profil->judul}} </a>
                </h4>
                <h5 align="center">{{$profil->nama}}</h5>
                <p class="card-text" align="center">Alamat : {{$profil->alamat}}</p>
                <div class="sharethis-inline-share-buttons"></div><br/>
                  <h5>DESKRIPSI</h5>
                <p align="justify">
                  {{$profil->proposal->first()->abstrak}}
                </p>
              </div>
              <div class="card-footer">
                <a href="{{url('polling/login/'.$p->profil_id)}}" class="btn btn-primary btn-lg" align="center"><i class="icon-like"></i></a> {{$profil->voter()->where('status','=',1)->get()->count()}} 
                <a href="" class="btn btn-danger btn-lg"><i class="icon-eye"></i></a> 100
              </div>
            </div>
          </div>
          <!-- @endforeach -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.row -->
  </div>
@endsection