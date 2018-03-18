@extends('content.template.app')
@section('content')
<div class="container">
<br><br>
    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{$article->judul}}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Teguh</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Postingan {{$article->created_at}}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{url('file/'.$article->gambar)}}" alt="">
        <small><i></i></small>
        <hr>

        <!-- Post Content -->
       <p align="justify">{{$article->isi}}</p>
        
        <hr>




      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <form method="POST" action="{{url('artikel/cari')}}">
                {{csrf_field()}}
                <input type="text" class="form-control" placeholder="Search for..." name="judul">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Cari !</button>
                </span>
              </form>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <!-- <div class="card my-4">
          <h5 class="card-header">Kategori</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Pangan</a>
                  </li>
                  
                </ul>
              </div>
              
            </div>
          </div>
        </div> -->


      </div>

    </div>
    <!-- /.row -->

  </div>
@endsection