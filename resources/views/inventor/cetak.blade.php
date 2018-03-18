<!DOCTYPE html>
<html>

<head>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Laporan Akun</title>

    
</head>

	<body>
		<style type="text/css">
	                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
	                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
	                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
	                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
	                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
	                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
	    </style>
	    <div style="font-family:Arial; font-size:12px;">
                <center><h2>Data Member</h2></center>  
         </div>

	     <table class="tg">
			<thead>
				<?php  $i = 1; ?>
												<tr>
				  <th>No</th>
				  <th>Nama</th>
				  <th>Kategori</th>
				  <th>Pilihan</th>
				</tr>
			</thead>
			@foreach ($users as $key => $user)
			<tbody>
				
				<tr>
					<td>{{ ++$i }}</td>
					<td>{{ $user ->name}} </td>
					<td>{{ $user->role }}</td>
					<td>
					
					</td>
				</tr>
			</tbody>
		@endforeach
		</table>
	</body>	
</html>