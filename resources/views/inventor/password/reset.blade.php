@extends('layouts.inventor')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            @include('layouts.pesan')
  <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('inventor')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                Ganti Password
            </li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">Ganti Password</div>
                    <div class="card-body">
                        <form method="POST" action="{{url('/inventor/resetpassword')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="password_lama">Password Lama</label>
                                <input type="password" class="form-control" id="password_lama" name="password_lama">
                            </div>
                            <div class="form-group">
                                <label for="password">Password Baru</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection