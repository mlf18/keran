<!DOCTYPE html>
<html lang="en">

<head>
 <style type="text/css">
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
 </style>
</head>

<body>

	<table width="100%">
		<tr>
			<td colspan="3"><h5><center>FORMULIR KUESIONER BUPATI/WALIKOTA PELOPOR INOVASI DAERAH</center></h5></td>
		</tr>	
	</table>
    
    
	<table width="100%">
            <thead>
              <tr>
                <th style="border:1px solid black">NO</th>
                <th style="border:1px solid black">UNSUR</th>
                <th style="border:1px solid black">JAWABAN SINGKAT</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="border:1px solid black">A</td>
                <td style="border:1px solid black">ALOKASI ANGGARAN</td>
                <td style="border:1px solid black"></td>
              </tr>
              <tr>
                <td style="border:1px solid black"></td>
                <td style="border:1px solid black">Berapa alokasi anggaran untuk kelitbangan Iptekin dari total APBD? (jelaskan secara spesifik dalam Rp. dan %)</td>
                <td style="border:1px solid black">{{$adminkues->alokasi_anggaran}}</td>
              </tr>
              <tr>
				<td style="border:1px solid black">B</td>
                <td style="border:1px solid black">PERATURAN DAERAH</td>
                <td style="border:1px solid black"> </td>
              </tr>
              <tr > 
					<td style="border:1px solid black"></td>
					<td style="border:1px solid black"> Adakah Regulasi Daerah yang mendukung kelitbangan Iptekin.? (jelaskan dengan singkat)</td>
                    <td style="border:1px solid black">{{$adminkues->perda}}</td>
              </tr>
			  <tr>
					<td style="border:1px solid black">C.</td>
					<td style="border:1px solid black">PAMERAN / LOMBA</td>
					<td style="border:1px solid black"></td>
				</tr>
				<tr>
					<td style="border:1px solid black"></td>
					<td style="border:1px solid black">Adakah MoU/Kerjasama terkait
						Kelitbangan Iptekin dengan
						Kementerian, Lembaga Litbang Pusat &
						Daerah serta Perguruan Tinggi?
					</td>
					<td style="border:1px solid black">{{$adminkues->mou}}</td>
				</tr>
				<tr>
					<td style="border:1px solid black">D.</td>
					<td style="border:1px solid black">PAMERAN / LOMBA</td>
					<td style="border:1px solid black"></td>
				</tr>
				<tr>
					<td style="border-left:1px solid black"></td>
					<td style="border:1px solid black">
						a) Adakah penyelenggaraan lomba
						Krenova tingkat kab/kota? 
					</td>
					<td style="border:1px solid black">{{$adminkues->lombakab}}</td>
				</tr>
				<tr>
					<td style="border-left:1px solid black"></td>
					<td style="border:1px solid black">b) Adakah penyelenggaraan pameran produk inovasi tingkat kab/kota.?</td>
					<td style="border:1px solid black">{{$adminkues->pamerankab}}</td>
				</tr>
				<tr>
					<td style="border:1px solid black">E. </td>
					<td style="border:1px solid black">JUMLAH PESERTA LOMBA KRENOVA/PAMERAN</td>
					<td style="border:1px solid black"></td>
				</tr>
				<tr>
					<td style="border-left:1px solid black"></td>
					<td style="border:1px solid black">a) Berapa jumlah peserta yang mengikuti lomba krenova kab/kota?</td>
					<td style="border:1px solid black">{{$adminkues->jumlah_pamerankab}}</td>
				</tr>
				<tr>
					<td style="border-left:1px solid black"></td>
					<td style="border:1px solid black">b) Berapa jumlah peserta pameran produk inovasi (PPI) kab/kota?</td>
					<td style="border:1px solid black">{{$adminkues->jumlah_lombakab}}</td>
				</tr>
				<tr>
					<td style="border:1px solid black">F</td>
					<td style="border:1px solid black">JUMLAH PEMENANG LOMBA KRENOVA TINGKAT PROVINSI</td>
					<td style="border:1px solid black"></td>
				</tr>
				<tr>
					<td style="border:1px solid black"></td>
					<td style="border:1px solid black">Berapa jumlah pemenang Lomba Krenova di tingkat Provinsi Tahun 2018 ?</td>
					<td style="border:1px solid black">{{$adminkues->orientasi}}</td>
				</tr>
				
            </tbody>
          </table>
</body>	
</html>
