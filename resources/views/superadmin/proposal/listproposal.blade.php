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
			<li class="breadcrumb-item active">Proposal</li>
	      </ol>
		  <div class="row">
					<div class="col-12">
						<div class="card mb-3">
							<div class="card-header">Proposal 2018</div>
							<div class="card-body">
								<table class="table table-bordered" id="dataTable"  cellspacing="0">
									<?php $i = 1 ?>
										<thead>
											<tr>
											  <th>No</th>
											  <th>Nama</th>
											  <th>Judul</th>
											  <th>Kab/Kota</th>
											  <th>Status Publikasi</th>
											  <th>Pilihan</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
											  <th>No</th>
											  <th>Nama</th>
											  <th>Judul</th>
											  <th>Kab/Kota</th>
											  <th>Status</th>
											  <th>Pilihan</th>
											</tr>
										</tfoot>
										<tbody>
							
											@foreach ($profils as $p)
							                <tr>
							                  <td >{{ $i++ }}</td>
											  <td>{{ $p->nama }}</td>
							                  <td >{{ $p->judul }}</td>
							                  <td>{{ $p->kabupaten}}</td>
							                  <td >@foreach ($p->proposal as $proposal)
							                  	  @if ($proposal->status == '3')
							                  	  	
							                  	  	<a href="{{url('superadmin/unpublish/'.$proposal->id)}}" class="btn btn-warning"> <i class="fa fa-times"> Unpublish </i></a>
							                  	  @elseif ($proposal->status == '1')
					
							                  	  	<a href="{{url('superadmin/publish/'.$proposal->id)}}" class="btn btn-primary"><i class="fa fa-check"></i> Publish </a>
							                  	  @else
							                  	  	
							                  	  @endif

							                  	  <!-- {{$proposal->status}} -->
							                  	  @endforeach
							                  </td>
											  <td width="25%">
													<a href="{{url('superadmin/detailproposal/'.$p->id)}}" class="btn btn-info">Lihat</a>
													<a href="{{url('superadmin/cheklist/'.$p->id)}}" class="btn btn-success">Check List</a>
													<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Print Proposal">
														<a href="{{url('superadmin/cetakproposal/'.$p->id)}}" class="btn btn-warning"><i class="fa fa-print"></i> </a>
													</span>
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