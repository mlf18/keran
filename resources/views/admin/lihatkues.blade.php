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
								<p>A. ALOKASI ANGGARAN</p>
									<div class="form-group">
										<label for="alokasi_anggaran">Berapa alokasi anggaran untuk kelitbangan Iptekin dari total APBD? (jelaskan secara spesifik dalam Rp. dan %)</label>
									    <input type="text" class="form-control" id="alokasi_anggaran" placeholder="" name="alokasi_anggaran" value="{{isset($kues->alokasi_anggaran)?$kues->alokasi_anggaran:''}}" readonly>
									</div>
								<p>B. PERATURAN DAERAH</p>
									<div class="form-group">
									    <label for="perda"> - Adakah Regulasi Daerah yang mendukung kelitbangan Iptekin ? (jelaskan dengan singkat)</label>
									    <input type="text" class="form-control" id="perda" placeholder=" " name="perda" value="{{isset($kues->perda)?$kues->perda:''}}" readonly>
									</div>
									<div class="form-group">
									    @if($kues->lampiranperda1_name!='')<label for="lampiranperda1_name"><a href="{{url('file/'.$kues->lampiranperda1_name)}}" target="_blank">Lampiran perda 1</a></label><br/>@endif
									</div>
									<div class="form-group">
									    @if($kues->lampiranperda2_name!='')<label for="lampiranperda2_name"><a href="{{url('file/'.$kues->lampiranperda2_name)}}" target="_blank">Lampiran perda 2</a></label><br/>@endif
									</div>
									<div class="form-group">
									    @if($kues->lampiranperda3_name!='')<label for="lampiranperda3_name"><a href="{{url('file/'.$kues->lampiranperda3_name)}}" target="_blank">Lampiran perda 3</a></label><br/>@endif
									</div>  
								<p>C. MoU/KERJASAMA</p>
									<div class="form-group">
									    <label for="mou"> - Adakah MoU/Kerjasama terkait Kelitbangan Iptekin dengan Kementerian, Lembaga Litbang Pusat & Daerah serta Perguruan Tinggi?</label>
									    <input type="text" class="form-control" id="mou" placeholder="" name="mou" value="{{isset($kues->mou)?$kues->mou:''}}" readonly> 
									</div>
									<div class="form-group">
									    @if($kues->lampiranmou1_name!='')<label for="lampiranmou1_name"><a href="{{url('file/'.$kues->lampiranmou1_name)}}" target="_blank">Lampiran mou 1</a></label><br/>@endif
									</div>
									<div class="form-group">
									    @if($kues->lampiranmou2_name!='')<label for="lampiranmou2_name"><a href="{{url('file/'.$kues->lampiranmou2_name)}}" target="_blank">Lampiran mou 2</a></label><br/>@endif
									</div>
									<div class="form-group">
									    @if($kues->lampiranmou3_name!='')<label for="lampiranmou3_name"><a href="{{url('file/'.$kues->lampiranmou3_name)}}" target="_blank">Lampiran mou 3</a></label><br/>@endif
									</div>
								<p>D. PAMERAN / LOMBA</p>
									<div class="form-group">
									    <label for="lombakab">a) Adakah penyelenggaraan lomba Krenova tingkat kab/kota? Jelaskan </label>
									    <input type="text" class="form-control" id="lombakab" name="lombakab" value="{{isset($kues->lombakab)?$kues->lombakab:''}}" readonly>
									</div>
									<div class="form-group">
									    <label for="pamerankab">b)	Adakah penyelenggaraan pameran produk inovasi tingkat kab/kota? Jelaskan</label>
									    <input type="text" class="form-control" id="pamerankab" name="pamerankab" value="{{isset($kues->pamerankab)?$kues->pamerankab:''}}" readonly>
									</div>
									  
								<p>E. JUMLAH PESERTA LOMBA KRENOVA/PAMERAN</p>	
									<div class="form-group">
									    <label for="jumlah_lombakab">a) Berapa jumlah peserta yang mengikuti lomba krenova tingkat kab/kota ?</label>
									    <input type="text" class="form-control" id="jumlah_lombakab" name="jumlah_lombakab" value="{{isset($kues->jumlah_lombakab)?$kues->jumlah_lombakab:''}}" readonly>
									</div>
									<div class="form-group">
									    @if($kues->lampiranlomba_name!='')<label for="lampiranlomba_name"><a href="{{url('file/'.$kues->lampiranlomba_name)}}" target="_blank">Lampiran Lomba</a></label><br/>@endif
									</div>
									<div class="form-group">
									    <label for="jumlah_pamerankab">b) Berapa jumlah peserta pameran produk inovasi (PPI)/Pameran Sejenis tingkat kab/kota ?</label>
									     <input type="text" class="form-control" id="jumlah_pamerankab" name="jumlah_pamerankab" value="{{isset($kues->jumlah_pamerankab)?$kues->jumlah_pamerankab:''}}" readonly>
									</div>
									<div class="form-group">
									    @if($kues->lampiranpameran_name!='')<label><a href="{{url('file/'.$kues->lampiranpameran_name)}}" target="_blank">Lampiran Lomba</a></label><br/>@endif
									</div>
									  
								<p>F. JUMLAH PEMENANG LOMBA KRENOVA TINGKAT PROVINSI</p>
									<div class="form-group">
									    <label for="dimana">Jumlah pemenang Lomba Krenova di tingkat Provinsi Tahun 2018 </label>
									     <input type="text" class="form-control" id="ide" placeholder="Diisi oleh BAPPEDA Provinsi"  disabled>
									</div>
									  <button type="submit" class="btn btn-success" disabled>Cetak</button>
							</form>
				        </div>
				    </div>		
				</div>
			</div>
		</div>
	</div>	
@endsection