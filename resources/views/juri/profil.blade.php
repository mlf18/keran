@extends('layouts.juri')

@section('section')

	<div class="content-wrapper">
	    <div class="container-fluid">
	      	<!-- Breadcrumbs-->
	      	<ol class="breadcrumb">
		        <li class="breadcrumb-item">
		          <a href="index.html">Dashboard</a>
		        </li>
				<li class="breadcrumb-item active">Profil Juri</li>
	      	</ol>
		  	<div class="row">
		        <div class="col-12">
			        <div class="card mb-3">
				        <div class="card-header">Profil Juri

				        </div>
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
									<label for="exampleFormControlSelect1">Kabupaten/Kota</label>
									<select class="form-control" id="bidang">
											<option>-</option>
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
										  <option>	Kota Surakarta</option>
										  <option>Kota Tegal</option>
									</select>
								  </div>
								  <div class="form-group">
									<label for="exampleFormControlSelect1">No Telepon/HP</label>
									<input type="text" class="form-control" id="no" >
								  </div>
								  <div class="form-group">
									<label for="exampleFormControlSelect1">Alamat Email</label>
									<input type="email" class="form-control" id="e-mail">
								  </div>
								   
									<button type="button" class="btn btn-primary">Simpan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection
