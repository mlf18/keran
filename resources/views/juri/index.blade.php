@extends('layouts.juri')

@section('section')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
		
      </ol>
	   <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <div class="mr-5"><b>Profil Inventor</b></div>
            </div>
            <a href="profil.html" class="card-footer text-white clearfix small z-1" >
              <span class="float-left">Lihat Profil</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
		
		<div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5"><b>Data Peserta</b></div>
            </div>
            <a href="peserta.html" class="card-footer text-white clearfix small z-1" >
              <span class="float-left">Lihat Data Peserta</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
		
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-file"></i>
              </div>
              <div class="mr-5"><b>Format Penilaian</b></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="nilai.html">
              <span class="float-left">Lihat Status</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
		
		<div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-key"></i>
              </div>
              <div class="mr-5"><b>Ganti Password</b></div>
            </div>
            <a  class="card-footer text-white clearfix small z-1" href="password.html">
              <span class="float-left">Ganti Password</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        
      </div>
    </div
	
@endsection
