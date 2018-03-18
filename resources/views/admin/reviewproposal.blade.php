@extends ('layouts.admin')
@section ('content')
<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.pesan')
  <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('admin')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Review Proposal</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">Review Proposal</div>
                    <div class="card-body">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                      <th width="5%">No</th>
                                      <th width="25%">Nama</th>
                                      <th>judul</th>
                                      <th width="25%">Status</th>
                                      <th width="10%">Pilihan</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                      <th width="5%">No</th>
                                      <th>Nama</th>
                                      <th>judul</th>
                                      <th >Status</th>
                                      <th>Pilihan</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                	<?php $i=1;?>
                                    @foreach($profils->profil as $profil)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$profil->nama}}</td>
                                        <td>{{$profil->judul}}</td>
                                        <td>
                                            @if(count($profil->proposal)>0)
                                            @foreach($profil->proposal as $proposal)
                                            @if($proposal->status == '1')
                                            <div class="alert alert-success" role="alert">	
                                                <i class="fa fa-check-circle-o"></i> Terkirim Provinsi
                                            </div>	
                                            @else
                                            <div class="alert alert-danger" role="alert"><i class="fa fa-remove"></i>	
                                                    Perlu Review 
                                               </div>	
                                            @endif
                                            @endforeach
                                            @else
                                               Belum Mengirim
                                            @endif
                                        </td>
                                        <td><a href="{{url('admin/lihatproposal/'.$profil->id)}}" class="btn btn-primary">Lihat</a>
                                            <a href="{{url('admin/cetakproposal/'.$profil->id)}}" class="btn btn-primary">Cetak</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>	
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection