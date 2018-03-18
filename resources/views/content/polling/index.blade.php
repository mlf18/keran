@extends('content.template.app')
@section('content')
<br><br>
	<br>
<div class="container">
    <div class="row">
      <div class="col-md-12">
        @include('layouts.pesan')
      </div>
      <div class="clearfix"></div>
      <div class="col-lg-3 col-md-3 ">
          <button type="button" class="btn btn-primary">10 Besar Vote/Like</button>
      </div>
      <br>
    <br>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      @foreach($profil as $p)
      @if ($p->proposal->first()['status']==3)
      <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{url('file/'.$p->proposal->first()['foto1_name'])}}" width="700px" height="170px"  alt=""></a>
                <div class="card-body">
                  <h4 class="card-title" align="center">
                    <a href="{{url('/polling/detail/'.$p->id)}}">{{$p->judul}} </a>
                  </h4>
                  <h5>{{$p->nama}}</h5>
                  <p class="card-text">Alamat : {{$p->alamat}}<br>
                    {{$p->kabupaten}}<br>
           <br><a href="{{url('/polling/detail/'.$p->id)}}">Selengkapnya</a></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><a href="{{url('/polling/login/'.$p->id)}}" class="btn-sm btn btn-primary"><i class="icon-like"></i></a></small> {{$p->voter()->where('status','=',1)->get()->count()}} 
                  <small class="text-muted"><a href="{{url('/polling/detail')}}" class="btn-sm btn btn-danger"><i class="icon-eye"></i></a></small> 100 
                  <small class="text-muted"><a href="{{url('/polling/detail')}}" class="btn-sm btn btn-info"><i class="icon-share"></i></a></small>
                </div>
              </div>
        </div>
        @endif
      @endforeach
    </div>
  </div>
  <!-- /.container -->
  @endsection