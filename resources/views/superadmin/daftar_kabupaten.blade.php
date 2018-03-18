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
						<div class="card-header"><a href="tambahkab-kota.html" class="btn btn-primary">Tambah Kabupaten/Kota</a> </div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
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
										<tr>
											<td>1</td>
											<td>01</td>
											<td>Kota Semarang</td>
											<td><a href="editkab-kota.html"  class="btn btn-primary">Edit</a> 
												<button type="button" class="btn btn-danger">Hapus</button></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection