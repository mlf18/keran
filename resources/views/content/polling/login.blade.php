@extends('content.template.app')
@section('content')
<div class="container">
    <div class="card card-login mx-auto mt-5" style=" margin:100px;">
      <div class="card-header">Vote</div>
      <div class="card-body">
        <form action="{{url('/polling/login')}}" method="POST">
          {{csrf_field()}}
          {{method_field('POST')}}
          <input type="hidden" name="profil_id" value="{{$id}}">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap </label>
            <input class="form-control" id="Nama" type="text" aria-describedby="Nama" name="nama" placeholder="Nama" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input class="form-control" id="exampleInputPassword1" type="email" name="email" placeholder="email" required>
          </div>
          
          <button type="submit" class="btn btn-primary btn-block" href="#">Vote</button>
        </form>
        
      </div>
    </div>
  </div>
  @endsection
