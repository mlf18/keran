@extends('layouts.inventor')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('layouts.pesan')
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    <a href="{{url('/inventor')}}">Dashboard Inventor</a>
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
                        <a class="card-footer text-white clearfix small z-1" href="{{url('inventor/editprofil') }}">
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
                        <a href="{{url('/proposal/'.Auth::user()->profil->id)}}" class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">Lihat Proposal</span>
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
                        <a href="{{url('inventor/resetpassword')}}" class="card-footer text-white clearfix small z-1" href="#">
                             <span class="float-left">Ganti Password</span>
                             <span class="float-right">
                             <i class="fa fa-angle-right"></i>

                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
				<div class="col-12">
					<div class="card mb-3">
						<div class="card-body">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th width="5%">No</th>
										<th width="25%">Nama</th>
										<th width="25%">Tanggal</th>
										<th width="25%">Pilihan</th>
									</tr>
								</thead>
									<tfoot>
										<tr>
										  <th>No</th>
										  <th>Nama</th>
										  <th>Tanggal</th>
										  <th>Pilihan</th>
										</tr>
									</tfoot>
									<tbody>
									<?php $i=1; ?>
                                        @foreach($drafts as $draft)
										<tr>
											<td>{{$i++}}</td>
                                            <td>Draft_{{$draft->id}}</td>
                                            <td>{{$draft->created_at}}</td>
                                            <td><a href="{{url('inventor/draft/'.$draft->id)}}">Lanjutkan</a></td>
                                        </tr>
                                        @endforeach
									</tbody>
							</table>	
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
@endsection