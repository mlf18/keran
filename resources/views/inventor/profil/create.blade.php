@extends ('layouts.inventor')
@section ('content')
<div class="content-wrapper">
    <div class="container-fluid">
  <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('inventor')}}">Dashboard</a>
            </li>
            
            <li class="breadcrumb-item active">
                <a href="{{url('inventor')}}"> Data Inventor</a>
            </li>
            <li class="breadcrumb-item active">
                Tambah Inventor
            </li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">Tambah Inventor</div>
                    <div class="card-body">
                        <form method="POST" action="{{url('/inventor')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
								<label for="exampleFormControlInput1">Nama/Kelompok</label>
								<input type="text" class="form-control" id="Nama" name="nama">
							  </div>
							   <div class="form-group">
								<label for="exampleFormControlInput1">Alamat</label>
								<input type="text" class="form-control" id="Alamat" name="alamat">
							  </div>
							  <div class="form-group">
								<label for="exampleFormControlSelect1">Kabupaten/Kota</label>
								<select class="form-control" id="kabupaten" name="kabupaten">
                                    <option value="banjarnegara">Kabupaten Banjarnegara</option>
                                    <option value="banyumas">Kabupaten Banyumas</option>
                                    <option value="batang">Kabupaten Batang</option>
                                    <option value="blora">Kabupaten Blora</option>
                                    <option value="boyolali">Kabupaten Boyolali</option>
                                    <option value="brebes">Kabupaten Brebes</option>
                                    <option value="cilacap">Kabupaten Cilacap</option>
                                    <option value="demak">Kabupaten Demak</option>
                                    <option value="grobogan">Kabupaten Grobogan</option>
								</select>
							  </div>
							  <div class="form-group">
								<label for="exampleFormControlSelect1">No Telepon/HP</label>
								<input type="text" class="form-control" id="no" name="no_telp">
							  </div>
							  <div class="form-group">
								<label for="exampleFormControlSelect1">Alamat Email</label>
								<input type="email" class="form-control" id="e-mail" name="email">
							  </div>
							   <div class="form-group">
								<label for="exampleFormControlSelect1">Judul Temuan/Inovasi</label>
								<input type="text" class="form-control" id="inovasi" name="inovasi">
							  </div>
							  <div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username">
							  </div>
							   <div class="form-group">
								<label for="password">Password</label>
								<input type="text" class="form-control" id="password" name="password">
							  </div>
								<button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection