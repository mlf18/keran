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
		<li class="breadcrumb-item active">Akun</li>
      </ol>
		@include('layouts.pesan')
		<div class="row">
				<div class="col-12">
					<div class="card mb-3">
						<div class="card-header"><a href="{{route('user.create')}}" class="btn btn-primary">Tambah Akun</a> </div>
						<div class="card-body">
							<!-- <div class="row">
								<div class="col-3">
									<div class="form-group">
									    <select class="form-control" id="kabkota">
										<option>Jawa Tengah</option>
									      <option>Kabupaten Banjarnegara</option>
									      <option>Kabupaten Banyumas</option>
									      <option>Kabupaten Batang</option>
									      <option>Kabupaten Blora</option>
									      <option>Kabupaten Boyolali</option>
										  <option>Kabupaten Brebes</option>
									      <option>Kabupaten Cilacap</option>
									      <option>Kabupaten Demak</option>
									      <option>Kabupaten Grobogan</option>
										  
										  <option>Kabupaten Jepara</option>
									      <option>Kabupaten Karanganyar</option>
									      <option>Kabupaten Kebumen</option>
									      <option>Kabupaten Kendal</option>
									      <option>Kabupaten Klaten</option>
										  <option>Kabupaten Kudus</option>
									      <option>Kabupaten Magelang</option>
									      <option>Kabupaten Pati</option>
									      <option>Kabupaten Pekalongan</option>
										  
										  <option>Kabupaten Pemalang</option>
									      <option>Kabupaten Purbalingga</option>
									      <option>Kabupaten Purworejo</option>
									      <option>Kabupaten Rembang</option>
									      <option>Kabupaten Semarang</option>
										  <option>Kabupaten Sragen</option>
									      <option>Kabupaten Sukoharjo</option>
									      <option>Kabupaten Tegal</option>
									      <option>Kabupaten Temanggung</option>
										  
										  <option>Kabupaten Wonogiri</option>
									      <option>Kabupaten Wonosobo</option>
									      <option>Kota Magelang</option>
									      <option>Kota Pekalongan</option>
									      <option>Kota Salatiga</option>
										  <option>Kota Semarang</option>
									      <option>Kota Surakarta</option>
									      <option>Kota Tegal</option>
									    </select>
									 </div>
								</div>
								<div class="col-3">
								
									<select class="form-control" id="bidang">
									  <option>Inventor</option>
									  <option>Admin</option>
									  <option>Super Admin Provinsi</option>
									  
									</select>
								</div>
								<div class="col-3">
									<input type="text" class="form-control" id="judul" placeholder="nama">
								</div>
								<div class="col-3">
									<button type="button" class="btn btn-primary">Cari</button> 
								</div>
							</div> -->
          
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<?php $i =0 ; ?>
									<thead>
										<tr>
										  <th width="5%">No</th>
										  <th>Nama</th>
										  <th>Kategori</th>
										  <th>Pilihan</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th width="5%">No</th>
											<th>Nama</th>								
											<th>Kategori</th>
											<th>Pilihan</th>
										</tr>
									</tfoot>
									@foreach ($users as $key => $user)
									<tbody>
										
										<tr>
											<td>{{ ++$i }}</td>
											<td>{{ $user ->name}} </td>
											<td>{{ $user->role }}</td>
											<td>
												<a href="{{ route('user.edit', $user->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
									
		 										<form action="{{ route('user.destroy', $user->id) }}" method="POST">
		 										{{ csrf_field() }}
		 										<input name="_method" type="hidden" value="DELETE">
												<button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
												</form>
											</td>
										</tr>
									</tbody>
									@endforeach
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		
    </div>
@endsection