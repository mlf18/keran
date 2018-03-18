@extends ('layouts.superadmin')
@section ('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      @include('layouts.pesan')
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
		<li class="breadcrumb-item active">Informasi</li>
		<li class="breadcrumb-item active">Daftar Pemenang</li>
      </ol>
	  <div class="row">
				<div class="col-12">
					<div class="card mb-3">
						<div class="card-header"><a href="{{url('daftarpemenang/create')}}" class="btn btn-primary">Tambah Daftar Pemenang</a></div>
						<div class="card-body">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<?php $i=1; ?>
									<tr>
										<th width="5%">No</th>
										<th width="25%">Nama</th>
										<th>Daftar Pemenang PDF</th>
										<th>Status</th>
										<th width="25%">Pilihan</th>
									</tr>
								</thead>
									<tfoot>
										<tr>
											<th width="5%">No</th>
											<th width="25%">Nama</th>
											<th width>Daftar Pemenang PDF</th>
											<th>Status</th>
											<th width="25%">Pilihan</th>
										</tr>
									</tfoot>
									<tbody>

										@foreach ($daftarpemenangs as $key => $p)
										<tr>
											<td>{{$i++}}</td>
											<td>{{$p -> nama}}</td>
											<td><a href="{{url('file/'.$p->nama_file)}}">{{$p->nama_file}}</a></td>
											<td>{{$p->status}}</td>
											<td><div class="box-button">
												<a href="{{ route('daftarpemenang.edit', $p->id) }}" class="btn btn-xs btn-warning"></i>Edit</a>
											</div>
											<div class="box-button">
		 										<form action="{{ route('daftarpemenang.destroy', $p->id) }}" method="POST">
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
</div>
@endsection