@extends ('layouts.superadmin')
@section ('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
		<li class="breadcrumb-item active">Profil Super Admin</li>
      </ol>
		<div class="row">
        <div class="col-12">
          <div class="card mb-3">
        <div class="card-header">Profil Super Admin</div>
        <div class="card-body">
			<form>
			  <div class="form-group">
				<label for="exampleFormControlInput1">Nama</label>
				<input type="text" class="form-control" id="Nama" >
			  </div>
			   <div class="form-group">
				<label for="exampleFormControlInput1">Alamat</label>
				<input type="text" class="form-control" id="Alamat">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlSelect1">No Telepon/HP</label>
				<input type="text" class="form-control" id="no" >
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlSelect1">Alamat Email</label>
				<input type="email" class="form-control" id="e-mail">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlSelect1">Username</label>
				<input type="email" class="form-control" id="e-mail">
			  </div>
			   
				<button type="button" class="btn btn-primary">Simpan</button>
			</form>
       
		</div>
		
        </div>
       
      </div>
    
        </div>
		
		
    </div>
@endsection