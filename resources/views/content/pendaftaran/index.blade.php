@extends('content.template.app')
@include('content.template.slider')
@section('content')
<div class="container">
        <div class="row">
          <!-- Post Content Column -->
          <div class="col-lg-4">
            <!-- Title -->
          </div>
          <div class="col-lg-4">
              <br>
              <br>
             <a href="{{url('/login')}}" class="btn btn-primary"><h4>LOGIN INVENTOR KRENOVA</h4></a>
                <br>
                <br>
                <a href="{{url('/login')}}" class="btn btn-primary" style="width :360px" ><h4>LOGIN KABUPATEN/KOTA</h4></a>
            <br>
            <br>
          </div>
          <div class="col-lg-4">
            <!-- Title -->
            <!-- Single Comment -->
            <!-- Comment with nested comments -->
          </div>
        </div>
        <!-- /.row -->
      </div>
@endsection