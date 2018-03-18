@extends ('layouts.admin')
@section ('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
		<li class="breadcrumb-item active">Surat Pengantar</li>
		<li class="breadcrumb-item active">Index</li>
      </ol>
	  <div class="row">
				<div class="col-12">
					<div class="card mb-3">
						<div class="card-header">
							
								@if (count($pengantars)<1)
									<a href="{{route('pengantarkota.create')}}" class="btn btn-primary">Surat Pengantar Baru</a> 
								@else
									Hapus Data Untuk Mengirm Ulang Surat Pengantar
								@endif
							
						</div>

						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<?php  $i = 1 ; ?>
										<tr>
										  <th width="5%">No</th>
										 
										  <th>Nama Surat</th>
										  <th>Pilihan</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th width="5%">No</th>
										
										  <th>Nama Surat</th>
										  <th>Pilihan</th>
										</tr>
									</tfoot>
									<tbody>
										@foreach ($pengantars as $key => $p)
										<tr>
											
											<td>{{  $i++ }}</td>
											<td><a href="{{url('suratpengantarkota/'.$p->nama_surat)}}">{{$p->nama_surat}}</a></td>
											<td>
											<div class="box-button">
		 										<form action="{{ route('pengantarkota.destroy', $p->id) }}" method="POST">
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