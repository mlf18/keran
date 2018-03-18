<?php 
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}?>
<!DOCTYPE html>
<html>

<head>
    <title>Proposal Inventor</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
</head>

	<body>
		<style type="text/css">
	                /*.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
	                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
	                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
	                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
	                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
	                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}*/
	            body{
					    
					font-family: Tahoma, Verdana, Segoe, sans-serif;
					font-size: 14px;
					font-style: normal;
					font-variant: normal;
					font-weight: 400;
					line-height: 20px;
					}
				table {
					    border-collapse: collapse;

					}
				table, th, td {
					word-break:normal;
				}
				.break{
				}
	    </style>
		<table class="table" width="100%">
			<tr>
				<td colspan="3">
					<h4><center><strong>FORMULIR PENDAFTARAN KRENOVA</strong></center></h4>
					<h4><center>PENGUSUL</center></h4>
				</td>
			</tr>
		</table>
		<table class="table" width="100%">
			<tr >
				<td style="border-style: none;width:1px;">Nama </td>
				<td style="width:1px;" colspan="2">: {{isset($admin->nama)?$admin->nama:''}}</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td colspan="2">: {{isset($admin->pekerjaan)?$admin->pekerjaan:''}}</td>
			</tr>
			<tr>
				<td >Lembaga/Instansi </td>
				<td colspan="2">: {{isset($admin->lembaga)?$admin->lembaga:''}}</td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td colspan="2">: {{isset($admin->alamat)?$admin->alamat:''}}</td>
			</tr>
			<tr>
				<td>No Telp/HP </td>
				<td colspan="2">: {{isset($admin->no_telp)?$admin->no_telp:''}}</td>
			</tr>
		</table>
		<table class="table" width="100%">
		<tr>
		<td colspan="3">
		Dengan ini kami merekomendasikan/mengusulkan nama tersebut
		di bawah ini untuk mengikuti pendaftaran<br/> Lomba Krenova Provinsi Jawa
		Tengah Tahun 2018
		</td>
		</tr>
		<tr>
		<td colspan="3">
		Bidang : {{ $inventor->kategori }} {{ $inventor->kategori_kelompok }}
		</td>
		</tr>
		<tr>
		<td colspan="3">
		
		</td>
		</tr>
		@if ($inventor->nama_kelompok=='')
		<tr>
		<td colspan="3">
		<p align="center">Peserta Perorangan </p>
		</td>
		</tr>
			<tr>
				<td>Nama </td>
				<td colspan="2">: {{ $profil->nama }}</td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td colspan="2">: {{ $profil->alamat }}</td>
			</tr>
			<tr>
				<td>Kab/Kota </td>
				<td colspan="2">: {{ $profil->kabupaten }}</td>
			</tr>
			<tr>
				<td>No Telp/HP </td>
				<td colspan="2">: {{ $profil->no_telp }}</td>
			</tr>
			<tr>
				<td>Alamat Email </td>
				<td colspan="2">: {{ $profil->email }}</td>
			</tr>
			@else
			<tr>
			<td colspan="3">
		<p align="center">Peserta Kelompok </p>
		</td>
		</tr>

			<tr>
				<td>Nama Kelompok </td>
				<td colspan="2">: {{ $inventor->nama_kelompok }}</td>
			</tr>
			<tr>
				<td>Ketua</td>
				<td colspan="2">: {{ $inventor->nama_ketua }} </td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td colspan="2">: {{ $inventor->alamat_kelompok }} </td>
			</tr>
			<tr>
				<td >Kab/Kota</td>
				<td colspan="2">: {{ $inventor->nama_ketua!=''?$inventor->kabupaten:'' }} </td>
			</tr>
			<tr>
				<td>No Telp/HP Ketua</td>
				<td colspan="2">: {{ $inventor->no_telp_kelompok }} </td>
			</tr>
			<tr>
				<td>Alamat Email </td>
				<td colspan="2">: {{ $inventor->email_kelompok }} </td>
			</tr>
			<tr>
			<td colspan="3">
		Nama Anggota Kelompok : 
			</td>
		</tr>
		<tr>
			<td colspan="3">
		  		{{ $inventor->anggota_1!=''?$inventor->anggota_1:'-' }}<br>
		  		{{ $inventor->anggota_2!=''?$inventor->anggota_2:'-' }}<br>
		  		{{ $inventor->anggota_2!=''?$inventor->anggota_3:'-' }}<br>
		  		{{ $inventor->anggota_2!=''?$inventor->anggota_4:'-' }}<br>
		  		{{ $inventor->anggota_2!=''?$inventor->anggota_5:'-' }}
		  	</td>
		</tr>
		@endif
		  <tr>
			<td colspan="3">
			Karya yang di usulkan :{{ $inventor->temuan }}
			</td>
		</tr>
			<tr>
			<td colspan="3">
			Kategori ( Pilih salah satu ) :
			</td>
		</tr>
		
			<tr>
			<td colspan="3">
		a. Temuan Baru {{ $inventor-> judul }}
		</td>
		</tr>
		<tr>
			<td colspan="3">
		b. Pengembangan dari {{ $inventor->pengembangan }}
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>{{$profil->kabupaten}}, {{tgl_indo(date('Y-m-d'))}}</td>
		</tr>
		<tr>
			<td></td>
			<td><div style="width: 150px;"></div></td>
			<td><p style="text-align: left">{{isset($admin->pekerjaan)?$admin->pekerjaan:''}} {{isset($admin->lembaga)?$admin->lembaga:''}}</p></td>
		</tr>
		<tr>
			<td></td>
			<td style="width: 20px;"></td>
			<td><div style="height: 25px;"></div></td>
		</tr>
		<tr>
			<td></td>	
			<td ></td>
			<td><p style="text-align: left">{{isset($admin->nama)?$admin->nama:''}}<br/>NIP.</p></td>
		</tr>
			</table>
		<table class="table" width="100%">
			<tr>
				<td colspan="3">
					<div></div>
        			<div style="page-break-before:always"></div>
				</td>
		</tr>
			<tr>
				<td colspan="3">
				    <h2 align="center">FORMULIR KUESIONER TEMUAN KRENOVA</h2>
				</td>
		    </tr>
		</table>
		<table class="table" width="100%">
		              <tr>
		                <th style="border:1px solid black; width: 3%;">NO</th>
		                <th style="border:1px solid black; width: 37%;">UNSUR</th>
		                <th style="border:1px solid black; width: 60%;">JAWABAN SINGKAT</th>
		              </tr>
		           
		            <tbody>
		              <tr>
		                <td style="border:1px solid black;">A</td>
		                <td style="border:1px solid black;">ORISINALITAS DAN KEPIONIRAN</td>
		                <td style="border:1px solid black;"> </td>
		              </tr>

		              <tr>
		                <td style="border-left:1px solid black;"></td>
		                <td style="border:1px solid black;">
		                	- Apakah sudah ada alat sejenis sebelumnya? Jelaskan.
		                </td>
		                <td style="border:1px solid black;">
		                	<div ><p>{{ $kuesinventor->temuan_asli }}<br/></p></div>
		                </td>
		              </tr>
		              <tr>
		                <td style="border-left:1px solid black;"></td>
		                <td style="border:1px solid black;">
		                	- Kapan temuan ini diproduksi (bulan, tahun)?
		                </td>
		                <td style="border:1px solid black;">
		                	<p>{{ $kuesinventor->waktu_produksi }}</p>
		                </td>
		              </tr>
		              <tr>
		                <td style="border-left:1px solid black;"></td>
		                <td style="border:1px solid black;">
		                	- Apakah temuan saudara/i merupakan hasil pengembangan ide orang lain?jelaskan
		                </td>
		                <td style="border:1px solid black;">
		                	<p>{{ $kuesinventor-> ide_orang }}</p>
		                </td>
		              </tr>
						<tr>
							<td style="border:1px solid black;">
								B.
							</td>
							<td style="border:1px solid black;">
								PENERAPAN 
							</td>
							<td style="border:1px solid black;">
							</td>
						</tr>
						<tr>
							<td style="border-left:1px solid black;"></td>
							<td style="border:1px solid black;">a. Implementasi</td>
							<td style="border:1px solid black;"></td>
						</tr>
						<tr>
							<td style="border-left:1px solid black;"></td>
							<td style="border:1px solid black;">- Apakah sudah dipersiapkan untuk komersial /dijual?</td>
							<td style="border:1px solid black;">{{ $kuesinventor->asal_usul }}</td>
						</tr>
		                <tr>
		                	<td style="border-left:1px solid black;"></td>
							<td style="border:1px solid black;">
								- Dimana , oleh siapa?
							</td>
							<td style="border:1px solid black;">
								{{ $kuesinventor->komersial }}
							</td>
						</tr>
						<tr>
							<td style="border-left:1px solid black;"></td>
							<td style="border:1px solid black;">- Fasilitasi dan lomba apa saja yang pernah diterima/diikuti? jelaskan</td>
							<td style="border:1px solid black;">{{ $kuesinventor->komersial_pihak }}</td>
						</tr>
						<tr>
							<td style="border-left:1px solid black;"></td>
							<td style="border:1px solid black;">b. Penerapan</td>
							<td style="border:1px solid black;"></td>
						</tr>
						<tr>
							<td style="border-left:1px solid black;"></td>
							<td style="border:1px solid black;">- Apakah temuan saudara sudah diterapkan?</td>
							<td style="border:1px solid black;">{{ $kuesinventor->penarapan }}</td>
						</tr>
						<tr>
							<td style="border-left:1px solid black;"></td>
							<td style="border:1px solid black;">- Dimana/oleh siapa?</td>
							<td style="border:1px solid black;">{{ $kuesinventor->pelaku_penerapan }}</td>
						</tr>
						<tr>
							<td style="border-left:1px solid black;"></td>
							<td style="border:1px solid black;">- Cakupan/Skala Penerapan (Kab/Kota, Provinsi, Nasional)</td>
							<td style="border:1px solid black;">{{ $kuesinventor->cakupan_penerapan }}</td>
						</tr>
						<tr>
					<td style="border:1px solid black;">C.</td>
					<td style="border:1px solid black;">MANFAAT</td>
					<td style="border:1px solid black;"></td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">a. Penyerapan Bahan Baku Lokal </td>
					<td style="border:1px solid black;"></td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">- Berapa persen penggunaan bahan baku lokal?</td>
					<td style="border:1px solid black;">{{$kuesinventor->bahan_lokal}}</td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">b. Peningkatan proses/kapasitas/produktivitas?</td>
					<td style="border:1px solid black;"></td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">- Seberapa besar produktivitas yang dihasilkan?</td>
					<td style="border:1px solid black;">{{$kuesinventor->komersial_pihak}}</td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">c. Penyerapan Tenaga Kerja </td>
					<td style="border:1px solid black;"></td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">-  Berapa banyak tenaga kerja yang diserap dalam penciptaan/penerapan produk(lapangan kerja)?</td>
					<td style="border:1px solid black;">{{$kuesinventor->kapasitas_produksi}}</td>
				</tr>
				<tr>
					<td style="border:1px solid black;">D</td>
					<td style="border:1px solid black;">KEBERLANGSUNGAN/KOMERSIALISASI</td>
					<td style="border:1px solid black;"></td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">a. Prospek Bisnis / Komersiaisasi</td>
					<td style="border:1px solid black;"></td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">- Oleh siapa dan dimana?</td>
					<td style="border:1px solid black;">{{$kuesinventor->tenaga_kerja}}</td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">- Bagaimana caranya ?</td>
					<td style="border:1px solid black;">{{$kuesinventor->prospek_cara}}</td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">- Perhitungan Biaya Produksi</td>
					<td style="border:1px solid black;">{{$kuesinventor->biaya_produksi}}</td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">- Berapa Omset Penjualan?</td>
					<td style="border:1px solid black;">{{$kuesinventor->omset}}</td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">b. Ketersediaan Bahan Baku </td>
					<td style="border:1px solid black;"></td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">- Dimana bahan baku pembuatan temuan ini bisa saudara/i diperoleh (diakses) ?</td>
					<td style="border:1px solid black;">{{$kuesinventor->komersial_pihak}}</td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">- Banyak tidaknya ketersediaan bahan baku untuk produksi temuan/inovasi?</td>
					<td style="border:1px solid black;">{{$kuesinventor->quantity_bahan}}</td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;"></td>
					<td style="border:1px solid black;">c. Berorientasi Kebutuhan Masa Depan </td>
					<td style="border:1px solid black;"></td>
				</tr>
				<tr>
					<td style="border-left:1px solid black;border-bottom:1px solid black;"></td>
					<td style="border:1px solid black;">- Menjawab kebutuhan teknologi bagi masyarakat(saat ini & ke depan), jelaskan</td>
					<td style="border:1px solid black;">{{$kuesinventor->orientasi}}</td>
				</tr>
				</table>
				<table class="table" width="100%">
				<tr>
				<td colspan="3">
					<div></div>
        			<div style="page-break-before:always"></div>
				</td>
				</tr>
				<tr>
					<td colspan="3"><center>{{$profil->judul}}</center></td>
				</tr>
				<tr>
					<td colspan="3"><center>oleh: <strong>{{$inventor->nama_kelompok==''?$inventor->nama_kelompok:$profil->nama}}</strong></center></td>
				</tr>
				<tr>
					<td colspan="3"><center>{{$profil->alamat.' '.$profil->kabupaten}}</center></td>
				</tr>
				<tr><td ></td>
					<td ></td>
					<td ></td></tr>
				<tr>
					<td colspan="3"><center><strong>Abstrak</strong></center></td>
				</tr>
				<tr>
					<td  colspan="3">       <p align="justify">{{$proposal->abstrak}}</p></td>
				</tr>
				<tr>
					<td  colspan="2"><strong>A. Latar Belakang</strong></td>
					<td></td>
				</tr>
				<tr>
					<td  colspan="3"><p align="justify">{{$proposal->latar_belakang}}</p></td>
				</tr>
				<tr>
					<td  colspan="3"><strong>B. Maksud dan Tujuan</strong></td>
				</tr>
				<tr>
					<td  colspan="3"><p align="justify">{{$proposal->maksud}}</p></td>
				</tr>
				<tr>
					<td  colspan="3"><strong>C. Manfaat</strong></td>
				</tr>
				<tr>
					<td  colspan="3"><p align="justify">{{$proposal->manfaat}}</p></td>
				</tr>
				<tr>
					<td  colspan="3"><strong>D. Spesifikasi Teknis</strong></td>
				</tr>
				<tr>
					<td  colspan="3"><p align="justify">{{$proposal->spek_teknik}}</p></td>
				</tr>
				<tr>
					<td  colspan="3"><strong>E.Keunggulan dan Perbedaan</strong></td>
				</tr>
				<tr>
					<td  colspan="3"><p align="justify">{{$proposal->keunggulan}}</p></td>
				</tr>
				<tr>
					<td  colspan="3"><strong>F. Penerapan pada Masyarakat dan Dunia Industri</strong></td>
				</tr>
				<tr>
					<td  colspan="3"><p align="justify">{{$proposal->penerapan}}</p></td>
				</tr>
				<tr>
					<td  colspan="3"><strong>G. Perhitungan Biaya Produksi Temuan/Inovasi</strong></td>
				</tr>
				<tr>
					<td  colspan="3"><p align="justify">{{$proposal->biaya_produksi}}</p></td>
				</tr>
				<tr>
					<td  colspan="3"><strong>H. Prospek Bisnis</strong></td>
				</tr>
				<tr>
					<td  colspan="3"><p align="justify">{{$proposal->prospek_bisnis}}</p></td>
				</tr>
    </table>
</body>	
</html>