@extends('layouts.juri')

@section('section')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
		<li class="breadcrumb-item active">Data Peserta</li>
      </ol>
	  
	  <div class="row">
        <div class="col-12">
          <div class="card mb-3">
        <div class="card-header">Data Peserta</div>
        <div class="card-body">
          		<!-- 	<div class="row">
          				<div class="col-3">
          				<div class="form-group">
              <select class="form-control" id="bidang">
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
            
          				</div>
          				<div class="col-3">
          				
          					<select class="form-control" id="bidang">
          					  <option>Agribisnis dan pangan</option>
          					  <option>Energi</option>
          					  <option>Kehutanan dan lingkungan hidup</option>
          					  <option>Kelautan dan perikanan</option>
          					  <option>Kesehatan, obat-obatan dan kosmetika</option>
          					  <option>Pendidikan</option>
          					  <option>Rekayasa Teknologi dan manufaktur</option>
          					  <option>Kerajinan dan industri rumah tangga</option>
          					  <option>Sosial</option>
          					</select>
          				</div>
          				<div class="col-3">
          					<input type="text" class="form-control" id="judul" placeholder="judul">
          				</div>
          				<div class="col-3">
          					<button type="button" class="btn btn-primary">Cari</button> 
          				</div>
          			</div> -->
          <div class="table-responsive">
		  
            <table class="table table-bordered"  width="100%" cellspacing="0">
              <?php $i= 1 ?>
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Nama</th>
                  <th>Kategori</th>
        				  <th>Judul</th>
        				  <th>Kab/Kota</th>
        				  <th>Pilihan</th>
                </tr>
              </thead>
              <tfoot>
                  <tr>
                  <th width="5%">No</th>
                  <th>Nama</th>
                  <th>Kategori</th>
      				    <th>Judul</th>
      				    <th>Kab/Kota</th>
      				    <th>Pilihan</th>
                  </tr>
              </tfoot>
              <tbody>
                @foreach($profils as $p)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$p->nama}}</td>
                  <td>@foreach($p->inventor as $inv)
                      {{$inv->kategori}}
                      @endforeach
                  </td>
				          <td>{{$p->judul}}</td>
                  <td>{{$p->kabupaten}}</td>
                  <td>
						      <a href="#" type="button" class="btn btn-primary">Lihat</a> 
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