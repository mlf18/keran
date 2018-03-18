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
			<li class="breadcrumb-item active">Pemenang</li>
	      </ol>
		  <div class="row">
					<div class="col-12">
						<div class="card mb-3">
							<div class="card-header">Pemenang Lomba</div>
							<div class="card-body">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
											  <th width="5%">No</th>
											  <th width="25%">Nama</th>
											  <th>judul</th>
											  <th width="25%">Publikasi</th>
											  <th width="10%">Pilihan</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
											  <th width="5%">No</th>
											  <th>Nama</th>
											  <th>judul</th>
											  <th >Publikasi</th>
											  <th>Pilihan</th>
											</tr>
										</tfoot>
										<tbody>
							
											@foreach ($profils as $p)
							                <tr>
							                  <td></td>
											  <td>{{ $p->nama }}</td>
							                  <td>{{ $p->judul }}</td>
							                  
							                  	<td>
							                  		@foreach ($p->proposals as $proposal)
							                  		{{ $proposal -> status }}
							                  		@endforeach
												</td>
												<td>
													<a href="{{url('admin/editprofil/'.$p->id)}}" class="btn btn-danger">Lihat</a>
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