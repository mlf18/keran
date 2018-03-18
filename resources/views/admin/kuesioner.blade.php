@extends ('layouts.admin')
@section ('content')
	<div class="content-wrapper">
	    <div class="container-fluid">
			@include('layouts.pesan')
		    <!-- Breadcrumbs-->
		     <ol class="breadcrumb">
		        <li class="breadcrumb-item">
		          <a href="{{url('admin')}}">Dashboard</a>
		        </li>
		        <li class="breadcrumb-item active">Pendaftaran Bupati/Walikota Pelopor Inovasi Daerah</li>
		    </ol>
	      	<div class="row">
		        <div class="col-12">
		          	<div class="card mb-3">
				        <div class="card-header">
				        FORMULIR KUESIONER BUPATI/WALIKOTA PELOPOR INOVASI DAERAH 
				    	</div>
				        <div class="card-body">
							<form method="post" action="{{url('adminkuesioner/')}}" enctype="multipart/form-data">
								{{csrf_field()}}
								<input type="hidden" name="draft_id" value=""/>
								<p>A. ALOKASI ANGGARAN</p>
									<div class="form-group">
										<label for="alokasi_anggaran">Berapa alokasi anggaran untuk kelitbangan Iptekin dari total APBD? Jelaskan secara spesifik dalam Rp. dan % dalam 3 tahun terakhir (2016, 2017, 2018)</label>
									    <input type="text" class="form-control" id="alokasi_anggaran" placeholder="" name="alokasi_anggaran">
									</div>
								<p>B. PERATURAN DAERAH</p>
									<div class="form-group">
									    <label for="perda"> - Adakah Regulasi Daerah yang mendukung kelitbangan Iptekin ? (jelaskan dengan singkat)</label>
									    <input type="text" class="form-control" id="perda" placeholder=" " name="perda">
									</div>
									<div class="form-group">
									    <label for="lampiranperda1_name">Jika ada, Lampirkan  </label>
									    <input type="file" class="form-control-file" id="lampiranperda1_name" name="lampiranperda1_name">
									</div>
									<div class="form-group">
									    <label for="lampiranperda2_name"> </label>
									    <input type="file" class="form-control-file" id="lampiranperda2_name" name="lampiranperda2_name">
									</div>
									  <div class="form-group">
									    <label for="lampiranperda2_name"> </label>
									    <input type="file" class="form-control-file" id="lampiranperda3_name" name="lampiranperda3_name">
									</div>
								<p>C. MoU/KERJASAMA</p>
									<div class="form-group">
									    <label for="mou"> - Adakah MoU/Kerjasama terkait Kelitbangan Iptekin dengan Kementerian, Lembaga Litbang Pusat & Daerah serta Perguruan Tinggi?</label>
									    <input type="text" class="form-control" id="mou" placeholder="" name="mou"> 
									</div>
									<div class="form-group">
									    <label for="lampiranmou1_name">Jika ada, Lampirkan  </label>
									    <input type="file" class="form-control-file" id="lampiranmou1_name" name="lampiranmou1_name">
									</div>
									<div class="form-group">
									    <label for="lampiranmou2_name"> </label>
									    <input type="file" class="form-control-file" id="lampiranmou2_name" name="lampiranmou2_name">
									</div>
									<div class="form-group">
									    <label for="lampiranmou3_name"> </label>
									    <input type="file" class="form-control-file" id="lampiranmou3_name" name="lampiranmou3_name">
									</div>
								<p>D. PAMERAN / LOMBA</p>
									<div class="form-group">
									    <label for="lombakab">a) Adakah penyelenggaraan lomba Krenova tingkat kab/kota? Jelaskan dalam 3 tahun terakhir (2015, 2016, 2017)</label>
									    <input type="text" class="form-control" id="lombakab" name="lombakab">
									</div>
									<div class="form-group">
									    <label for="pamerankab">b)	Adakah penyelenggaraan pameran produk inovasi tingkat kab/kota? Jelaskan dalam 3 tahun terakhir (2015, 2016, 2017)</label>
									    <input type="text" class="form-control" id="pamerankab" name="pamerankab">
									</div>
									  
								<p>E. JUMLAH PESERTA LOMBA KRENOVA/PAMERAN</p>	
									<div class="form-group">
									    <label for="jumlah_lombakab">a) Berapa jumlah peserta yang mengikuti lomba krenova tingkat kab/kota ? Jelaskan dalam 3 tahun terakhir (2015, 2016, 2017)</label>
									    <input type="text" class="form-control" id="jumlah_lombakab" name="jumlah_lombakab">
									</div>
									<div class="form-group">
									    <label for="lampiranjumlah_lombakab"><small>Lengkapi/lampirkan dengan bukti</small></label>
										<input type="file" class="form-control-file" id="lampiranjumlah_lombakab" name="lampiranjumlah_lombakab">
									</div>
									<div class="form-group">
									    <label for="jumlah_pamerankab">b) Berapa jumlah peserta pameran produk inovasi (PPI)/Pameran Sejenis tingkat kab/kota ? Jelaskan dalam 3 tahun terakhir (2015, 2016, 2017)</label>
									     <input type="text" class="form-control" id="jumlah_pamerankab" name="jumlah_pamerankab">
									</div>
									<div class="form-group">
									    <label for="lampiranjumlah_pamerankab"><small>(Lengkapi/lampirkan dengan bukti)</small></label>
										<input type="file" class="form-control-file" id="lampiranjumlah_pamerankab" name="lampiranjumlah_pamerankab">
									</div>
									  
								<p>F. JUMLAH PEMENANG LOMBA KRENOVA TINGKAT PROVINSI</p>
									<div class="form-group">
									    <label for="dimana">Jumlah pemenang Lomba Krenova di tingkat Provinsi Tahun 2018 </label>
									     <input type="text" class="form-control" id="ide" placeholder="Diisi oleh BAPPEDA Provinsi"  disabled>
									</div>
									  <button type="submit" value="draft" name="submit" class="btn btn-primary">Simpan Draft</button> <button type="submit" class="btn btn-success">Kirim</button>
							</form>
				        </div>
				    </div>		
				</div>
			</div>
		</div>
	</div>
						
		
				
@endsection