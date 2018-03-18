@extends('content.template.app')
@include('content.template.slider')
@section('content')
<div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">Unduh</h1>

          <!-- Author -->
          

          <hr>

          
          <!-- Post Content -->
         <p>

            <ol>
              @foreach($panduans as $panduan)
              <li><a href="{{url('file/'.$panduan->nama_panduan)}}">{{$panduan->nama}}</a><br>
              </li>
              @endforeach
            </ol>
          
          <hr>

          

          <!-- Single Comment -->
       

          <!-- Comment with nested comments -->
          

        </div>

        

      </div>
      <!-- /.row -->

    </div>
  @endsection