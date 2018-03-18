@extends('content.template.app')
@include('content.template.slider')
@section('content')
<div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Berita
          <small></small>
        </h1>
    @foreach($articles as $article)
    <div class="card mb-4">
          <img class="card-img-top" src="{{url('file/'.$article->gambar)}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$article->judul}}</h2>
            <p class="card-text">{{ substr(strip_tags($article->isi), 0, 125) }}{{ strlen(strip_tags($article->isi)) > 125 ? '...' : "" }}</p>
            <a href="{{url('artikel/'.$article->id.'/show')}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Postingan Tanggal {{$article->create_at}} by
            <a href="#">Teguh</a>
          </div>
        </div>
    @endforeach
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

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
              <div class="col-lg-6">
                
              </div>
            </div>
          </div>
        </div> -->

        

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection