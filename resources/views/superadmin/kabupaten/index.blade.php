@extends ('layouts.superadmin')
@section ('content')
<div class="content-wrapper">
    <div class="container-fluid">
    	@include('layouts.pesan')
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
						<!-- <div class="card-header"><a href="{{route('kabupaten.create')}}" class="btn btn-primary">Tambah Kabupaten/Kota</a> </div> -->
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<?php  $i = 1 ; ?>
										<tr>
										  <th width="5%">No</th>
										  <th>Kode</th>
										  <th>Kabupaten/Kota</th>
										  <th>Pilihan</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th width="5%">No</th>
											<th>Kode</th>
										  <th>Kabupaten/Kota</th>
										  <th>Pilihan</th>
										</tr>
									</tfoot>
									<tbody>
										@foreach ($kabupatens as $key => $kab)
										<tr>
											
											<td>{{  $i++ }}</td>
											<td>{{$kab->kode}}</td>
											<td>{{$kab->name}}</td>
											<td><div class="box-button">
												<a href="{{ route('kabupaten.edit', $kab->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
											</div>
											<div class="box-button">
		 										<form action="{{ route('kabupaten.destroy', $kab->id) }}" method="POST">
		 										{{ csrf_field() }}
		 										<input name="_method" type="hidden" value="DELETE">
												<button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
												</form>
											</div></td>
											
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