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
		<li class="breadcrumb-item active">Master Web</li>
		<li class="breadcrumb-item active">Slider</li>
      </ol>
	  <div class="row">
				<div class="col-12">
					<div class="card mb-3">
						<div class="card-header"><a href="{{route('slider.create')}}" class="btn btn-primary">Tambah Slider</a></div>
						<div class="card-body">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<?php  $i = 1 ; ?>
								<thead>

									<tr>
										<th width="5%">No</th>
										<th width="25%">Gambar</th>
										<th>Penjelasan</th>
										<th>Status</th>
										<th width="25%">Pilihan</th>
									</tr>
								</thead>
									<tfoot>
										<tr>
											<th width="5%">No</th>
											<th width="25%">Gambar</th>
											<th>Penjelasan</th>
											<th>Status</th>
											<th width="25%">Pilihan</th>
										</tr>
									</tfoot>
									<tbody>
										@foreach ($slider as $key => $slide)
										<tr>
											<td>{{$i++}}</td>
											<td><img src="suratpengantarkota/{{$slide->nama_slider}}" width="200px" height="200px" class="img-thumbnail"></td>
											<td>{{$slide->nama}}</td>
											<td>{{$slide->status}}</td>
											
											<td><div class="box-button">
												<a href="{{ route('slider.edit', $slide->id) }}" class="btn btn-xs btn-warning"></i>Edit</a>
											</div>
											<div class="box-button">
		 										<form action="{{ route('slider.destroy', $slide->id) }}" method="POST">
		 										{{ csrf_field() }}
		 										<input name="_method" type="hidden" value="DELETE">
												<button type="submit" class="btn btn-xs btn-danger"></i>Delete</button>
												</form>
											</div>
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