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
			                  <th>Nama</th>
			                  <th>judul</th>
							  <th>Status</th>
							  <th>Pilihan</th>
			                </tr>
			            </thead>
			            <tfoot>
			                <tr>
			                  <th width="5%">No</th>
			                  <th>Nama</th>
			                  <th>judul</th>
							  <th>Status</th>
							  <th>Pilihan</th>
			                </tr>
			            </tfoot>
			            
			            <tbody>
			         		@foreach ($profils->profils as $p)
			                <tr>
			                  <td></td>
							  <td>{{ $p->nama }}</td>
			                  <td>{{ $p->judul }}</td>
			                  
			                  	<td>
			                  		@foreach ($p->proposals as $proposal)
									{{$proposal->status}}
									@endforeach
								</td>
								<td>
									<a href="{{url('admin/editprofil/'.$proposal->id)}}" class="btn btn-danger">Lihat</a></td>
							</tr>
							@endforeach
			            </tbody>
			            
		            </table>		
				</div>
	      	</div>
	    </div>
    </div>
@endsection