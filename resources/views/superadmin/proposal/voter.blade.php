@extends ('layouts.superadmin')
@section ('content')


	 <div class="content-wrapper">
	    <div class="container-fluid">
	      <!-- Breadcrumbs-->
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item">
	          <a href="#">Dashboard</a>
	        </li>
			<li class="breadcrumb-item active">Master Data</li>
			<li class="breadcrumb-item active">Voter</li>
	      </ol>
		  <div class="row">
					<div class="col-12">
						<div class="card mb-3">
							<div class="card-header">Voter</div>
							<div class="card-body">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<?php $i = 1 ?>
										<thead>
											<tr>
											  <th width="3%" >No</th>
											  <th>Nama</th>
											  <th>Judul</th>
											  <th>Jumlah Voters</th>
											  <th>Pilihan</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
											  <th width="3%">No</th>
											  <th>Nama</th>
											  <th>Judul</th>
											  <th>Jumlah Voters</th>
											  <th>Pilihan</th>
											</tr>
										</tfoot>
										<tbody>
							
											@foreach ($profils as $p)
							                <tr>
							                  <td width="3%">{{ $i++ }}</td>
											  <td>{{ $p->nama }}</td>
							                  <td width="10%">{{ $p->judul }}</td>							    
							                  <td width="25%">

							                  </td>
											  <td width="25%">
													<a href="#" class="btn btn-danger">Lihat Voter</a>
													
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
@endsectio