@extends ('layouts.superadmin')
@section ('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
		<li class="breadcrumb-item active">Informasi</li>
		<li class="breadcrumb-item active">Berita</li>
		<li class="breadcrumb-item active">Tambah Berita</li>
      </ol>
	  <div class="row">
        <div class="col-12">
          <div class="card mb-3">
        <div class="card-header">Tambah Berita</div>
        <div class="card-body">
			<form method="post" action="{{url('berita')}}" enctype="multipart/form-data">
                {{csrf_field()}}
				<div class="form-group">
					<label for="judul">judul</label>
					<input type="text" class="form-control" id="judul" name="judul"/>
				</div>
				<div class="form-group">
					<label for="kategori">Kategori</label>
					<select class="form-control" id="kategori" name="kategori">
						<option>-</option>
						<option value="pangan">Pangan</option>			  
						</select>	  
				</div>
				<div class="form-group">
					<label for="gambar">Gambar</label>
					<input type="file" class="form-control-file" id="gambar" name="gambar">
				</div>
				
				<div class="form-group">
					<label for="isi_berita">Isi Berita</label>
					<textarea class="form-control" id="isi_berita" rows="3" name="isi_berita"></textarea>
				</div>
				
				<button type="submit" class="btn btn-primary">Simpan</button> 
			</form>
		</div>
        </div>
      </div>
    
        </div>
		
	</div>
@endsection