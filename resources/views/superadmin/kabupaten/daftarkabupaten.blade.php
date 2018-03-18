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
		<li class="breadcrumb-item active">Kabupaten/Kota</li>
      </ol>
	  <div class="row">
				<div class="col-12">
					<div class="card mb-3">
						<div class="card-header">Data Kabupaten / Kota  Tahun 2018</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<?php  $i = 1 ; ?>
										<tr>
										  <th width="5%">No</th>
										  <th>Kabupaten/Kota</th>
										  <th>Surat Pengantar Proposal </th>
										  <th>Questioner Bupati/Walikota Pelopor Inovasi</th>
										  
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th width="5%">No</th>
										  <th>Kabupaten/Kota</th>
										  <th>Surat Pengantar</th>
										  <th>Questioner Bupati/Walikota Pelopor Inovasi</th>
										  
										</tr>
									</tfoot>
									<tbody>
										@foreach ($admins as $key => $kab)
										<tr>
											
											<td>{{  $i++ }}</td>
											<td>{{$kab->kabupaten}}</td>
											<td>
												@foreach($kab->pengantarkota as $pengantar)
													<a href="{{url('suratpengantarkota/'.$pengantar->nama_surat)}}">{{$pengantar->nama_surat}}</a>
												@endforeach
											</td>
											<td>
												@foreach($kab->kuesadmin as $kues)
													 <a href="{{url('superadmin/detailkuesadmin/'.$kues->id)}}" class="btn btn-success">Detail Kuesioner {{$kues->nama_kabupaten}}</a>
												@endforeach
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