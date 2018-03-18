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
			<li class="breadcrumb-item active">Proposal</li>
	      </ol>
		  <div class="row">
					<div class="col-12">
						<div class="card mb-3">
							<div class="card-header">Proposal</div>
							<div class="card-body">
								<form>
									<div class="form-group">
										<label for="nomor">Nomor</label>
										<input type="text" class="form-control" id="nomor"  value="" disabled>
									</div>
									<div class="form-group">
										<label for="kabkota">Kab./Kota</label>
										<input type="text" class="form-control" id="kabkota" value="{{ $profil->kabupaten }}"  disabled>
									</div>
									<div class="form-group">
										<label for="judul">Judul</label>
										<input type="text" class="form-control" id="judul" value="{{$profil->judul}}"  disabled>
									</div>

								@if ($proposal->status== '3'|| $proposal->status=='1' )
								
								
								<table class="table table-bordered"  width="100%" cellspacing="0">
									<tr>
										<td rowspan="2"><b>No</b></td>
										<td rowspan="2"><b>Ketentuan</b></td>
										<td colspan="2"><b>Keterangan</b></td>
									</tr>
									<tr>
										<td><b>Ada</b></td>
										<td><b>Tidak Ada</b></td>
									</tr>
									<tr>
										<td><b>1.</b></td>
										<td><b>Surat Pengantar</b></td>
										<td><input type="radio" name="SuratPengantar" value= "ada" checked="" > Ada</td>
										<td><input type="radio" name="SuratPengantar" value="false"> Tidak Ada</td>
									</tr>
									<tr>
										<td><b>2.</b></td>
										<td><b>Isian Formulir Pendaftran Krenova</b></td>
										<td><input type="radio" name="Isian" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="Isian" value="tidak"> Tidak Ada</td>
									</tr>
									<tr>
										<td><b>3.</b></td>
										<td><b>Proposal Hard Copy & CD, berisi:</b></td>
										<td><input type="radio" name="proposal" value="" checked="" > Ada</td>
										<td><input type="radio" name="proposal" value="tidak">Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>a. Judul</td>
										<td><input type="radio" name="judul" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="judul" value="tidak"> Tidak Ada</td>
									</tr>
									
									<tr>
										<td></td>
										<td>b. Abstrak</td>
										<td><input type="radio" name="abstrak" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="abstrak" value="tidak"> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>c. Latar Belakang</td>
										<td><input type="radio" name="latarbelakang" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="latarbelakang" value="tidak"> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>d. Maksud dan Tujuan</td>
										<td><input type="radio" name="maksuddantujuan" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="maksuddantujuan" value="tidak"> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>e. Manfaat</td>
										<td><input type="radio" name="manfaat" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="manfaat" value="tidak"> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>f. Spesifikasi</td>
										<td><input type="radio" name="spesifikas" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="spesifikas" value="tidak"> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>g. Keunggulan/Perbedaan dibandingkan dengan penemuan sejenis sebelumnya</td>
										<td><input type="radio" name="keunggulan" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="keunggulan" value="tidak"> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>h. Penerapan Pada Masyarakat dan Dunia Industri</td>
										<td><input type="radio" name="industri" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="industri" value="tidak"> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>i. Perhitungan Biaya Produksi temuan/Inovasi</td>
										<td><input type="radio" name="biaya" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="biaya" value="tidak"> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>j. Prospek Bisnis/Komersialisasi</td>
										<td><input type="radio" name="bisnis" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="bisnis" value="tidak"> Tidak Ada</td>
									</tr>
									
									<tr>
										<td><b>4.</b></td>
										<td><b>Profil Inventor/Penemu</b></td>
										<td><input type="radio" name="profil" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="profil" value="tidak"> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>a. Isian Formulir Kuesioner Temuan Krenova</td>
										<td><input type="radio" name="isiankuesioner" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="isiankuesioner" value="tidak"> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>b. Surat Penyataan Keaslian Temuan</td>
										<td><input type="radio" name="keaslian" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="keaslian" value="tidak" > Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>c. Kelengkapan Proposal atau Profil Temuan/Inovasi</td>
										<td><input type="radio" name="KelengkapanProposal" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="KelengkapanProposal" value="tidak"> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>d. Foto Copy KTP/Kartu Pelajar dan Daftar Riwayat Hidup Inventor/Inovator</td>
										<td><input type="radio" name="fotocopydanriwayathidup" value="ada" checked="" > Ada</td>
										<td><input type="radio" name="fotocopydanriwayathidup" value="tidak"> Tidak Ada</td>
									</tr>

								</table>
								
								@else
								
									<table class="table table-bordered"  width="100%" cellspacing="0">
									<tr>
										<td rowspan="2"><b>No</b></td>
										<td rowspan="2"><b>Ketentuan</b></td>
										<td colspan="2"><b>Keterangan</b></td>
									</tr>
									<tr>
										<td><b>Ada</b></td>
										<td><b>Tidak Ada</b></td>
									</tr>
									<tr>
										<td><b>1.</b></td>
										<td><b>Surat Pengantar</b></td>
										<td><input type="radio" name="SuratPengantar" value= "ada" > Ada</td>
										<td><input type="radio" name="SuratPengantar" value="false" checked="" > Tidak Ada</td>
									</tr>
									<tr>
										<td><b>2.</b></td>
										<td><b>Isian Formulir Pendaftran Krenova</b></td>
										<td><input type="radio" name="Isian" value="ada" > Ada</td>
										<td><input type="radio" name="Isian" value="tidak" checked="" > Tidak Ada</td>
									</tr>
									<tr>
										<td><b>3.</b></td>
										<td><b>Proposal Hard Copy & CD, berisi:</b></td>
										<td><input type="radio" name="proposal" value="" > Ada</td>
										<td><input type="radio" name="proposal" value="tidak" checked="" >Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>a. Judul</td>
										<td><input type="radio" name="judul" value="ada"  > Ada</td>
										<td><input type="radio" name="judul" value="tidak" checked=""> Tidak Ada</td>
									</tr>
									
									<tr>
										<td></td>
										<td>b. Abstrak</td>
										<td><input type="radio" name="abstrak" value="ada"  > Ada</td>
										<td><input type="radio" name="abstrak" value="tidak" checked=""> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>c. Latar Belakang</td>
										<td><input type="radio" name="latarbelakang" value="ada"  > Ada</td>
										<td><input type="radio" name="latarbelakang" value="tidak" checked=""> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>d. Maksud dan Tujuan</td>
										<td><input type="radio" name="maksuddantujuan" value="ada" > Ada</td>
										<td><input type="radio" name="maksuddantujuan" value="tidak" checked="" > Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>e. Manfaat</td>
										<td><input type="radio" name="manfaat" value="ada"  > Ada</td>
										<td><input type="radio" name="manfaat" value="tidak" checked=""> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>f. Spesifikasi</td>
										<td><input type="radio" name="spesifikas" value="ada"  > Ada</td>
										<td><input type="radio" name="spesifikas" value="tidak" checked=""> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>g. Keunggulan/Perbedaan dibandingkan dengan penemuan sejenis sebelumnya</td>
										<td><input type="radio" name="keunggulan" value="ada"  > Ada</td>
										<td><input type="radio" name="keunggulan" value="tidak" checked=""> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>h. Penerapan Pada Masyarakat dan Dunia Industri</td>
										<td><input type="radio" name="industri" value="ada" > Ada</td>
										<td><input type="radio" name="industri" value="tidak" checked="" > Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>i. Perhitungan Biaya Produksi temuan/Inovasi</td>
										<td><input type="radio" name="biaya" value="ada">  Ada</td>
										<td><input type="radio" name="biaya" value="tidak" checked="" >Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>j. Prospek Bisnis/Komersialisasi</td>
										<td><input type="radio" name="bisnis" value="ada" > Ada</td>
										<td><input type="radio" name="bisnis" value="tidak" checked="" > Tidak Ada</td>
									</tr>
									
									<tr>
										<td><b>4.</b></td>
										<td><b>Profil Inventor/Penemu</b></td>
										<td><input type="radio" name="profil" value="ada"  > Ada</td>
										<td><input type="radio" name="profil" value="tidak" checked=""> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>a. Isian Formulir Kuesioner Temuan Krenova</td>
										<td><input type="radio" name="isiankuesioner" value="ada" > Ada</td>
										<td><input type="radio" name="isiankuesioner" value="tidak" checked="" > Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>b. Surat Penyataan Keaslian Temuan</td>
										<td><input type="radio" name="keaslian" value="ada"  > Ada</td>
										<td><input type="radio" name="keaslian" value="tidak" checked="" > Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>c. Kelengkapan Proposal atau Profil Temuan/Inovasi</td>
										<td><input type="radio" name="KelengkapanProposal" value="ada"  > Ada</td>
										<td><input type="radio" name="KelengkapanProposal" value="tidak" checked=""> Tidak Ada</td>
									</tr>
									<tr>
										<td></td>
										<td>d. Foto Copy KTP/Kartu Pelajar dan Daftar Riwayat Hidup Inventor/Inovator</td>
										<td><input type="radio" name="fotocopydanriwayathidup" value="ada"  > Ada</td>
										<td><input type="radio" name="fotocopydanriwayathidup" value="tidak" checked=""> Tidak Ada</td>
									</tr>
								</table>
								
								@endif
							</form>
							</div>
						</div>
					</div>
				</div>
			
			
	    </div>
@endsection