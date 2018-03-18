@extends('layouts.inventor')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href="{{route('inventor.index')}}">Dashboard Inventor</a>
        </li>
        
      </ol>
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <div class="mr-5">Profil Inventor</div>
            </div>
            <a href="{{route('inventor.create') }}" class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Lihat Profil</span>
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
                <i class="fa fa-fw fa-file-text"></i>
              </div>
              <div class="mr-5"><b>Pengajuan Proposal</b></div>
            </div>
            <a href="{{route('proposal.create')}}" class="card-footer text-white clearfix small z-1" href="#">
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
              <div class="mr-5">Ganti Password</div>
            </div>
            <a href="{{url('user/edit')}}" class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Ganti Password</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        
      </div>
     
    
    
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
</div>

	
   
    
   
    



@endsection
