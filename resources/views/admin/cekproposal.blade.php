@extends ('layouts.admin')
@section ('content')

	<div class="content-wrapper">
	    <div class="container-fluid">
				@include('layouts.pesan')
	      <!-- Breadcrumbs-->
		    <ol class="breadcrumb">
		        <li class="breadcrumb-item">
		          <a href="index.html">Dashboard</a>
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
			                <tr>
			                  <td>1</td>
							  <td>Ahmad Syarifuddin Latif</td>
			                  <td>Judul-judulan</td>
			                  
			                  	<td>
									<button type="button" class="btn btn-success"><i class="fa fa-check-circle-o"></i> Terkirim</button></td>
								<td>
									<button type="button" class="btn btn-danger">Lihat</button></td>
							</tr>
			            </tbody>
		            </table>		
				</div>
	      	</div>
	    </div>
    </div>
@endsection