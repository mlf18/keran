@extends ('layouts.superadmin')
@section ('content')


	 <div class="content-wrapper">
	    <div class="container-fluid">
	      <!-- Breadcrumbs-->
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="#">Dashboard</a>
	        </li>
			<li class="breadcrumb-item active">Laporan</li>
			<li class="breadcrumb-item active">Hasil Voting</li>
	      </ol>
		  <div class="row">
					<div class="col-12">
						<div class="card mb-3">
							<div class="card-header"><a href="#" class="btn btn-primary">Cetak</a></div>
							<div class="card-body">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<?php $i=1 ; ?>
										<thead>
											<tr>
											  <th width="5%">No</th>
											  <th width="25%">Nama</th>
											  <th>Judul</th>
											  <th>Kabupaten / Kota</th>
											  <th width="25%">Jumlah Voter</th>
											  
											</tr>
										</thead>
										<tfoot>
											<tr>
											  <th width="5%">No</th>
											  <th>Nama</th>
											  <th>Judul</th>
											  <th>Kabupaten / Kota</th>
											  <th>Jumlah Voter</th>
											  
											</tr>
										</tfoot>
										<tbody>
							
											@foreach ($profils as $p)
							                <tr>
							                  <td>{{ $i++ }}</td>
											  <td>{{ $p->nama }}</td>
							                  <td>{{ $p->judul }}</td>
							                  <td>{{ $p->kabupaten }}</td>
							                  <td>
							                  		
												</td>
												
											@endforeach
												
										</tbody>
								</table>	
							</div>
						</div>
					</div>
				</div>			
	    </div>
@endsection