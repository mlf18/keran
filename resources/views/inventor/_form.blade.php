
				<h3>FORMULIR PENDAFTARAN KRENOVA 2018</h3>
				<h4>PENGUSUL</h4>
				<div class="form-group">
					<hr>
					{!! Form::label('nama_pengusul', 'Nama') !!}

					{!! Form::text('nama', null,  ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}

					{!! Form::label('jabatan', 'Jabatan') !!}
					{!! Form::text('jabatan', null, ['class'=>'form-control', 'placeholder' => 'jabatan']) !!}

					<hr>
					{!! Form::label('Lembaga', 'Lembaga/instansi') !!}
					{!! Form::text('lembaga', null,  ['class'=>'form-control', 'placeholder' => 'Lembaga']) !!}

					<hr>
					{!! Form::label('Alamat', 'Alamat') !!}
					{!! Form::text('alamat', null,  ['class'=>'form-control', 'placeholder' => 'Alamat']) !!}



					<hr>
					{!! Form::label('no_telp', 'No Telp/HP') !!}
					{!! Form::text('no_telp', null,  ['class'=>'form-control', 'placeholder' => 'No Telp/HP']) !!}




        		</div>

        		<p>
					Dengan ini kami merekomendasikan / mengusulkan nama tersebut di bawah ini untuk mengikuti pendaftaran Lomba Krenova Provinsi Jawa Tengah Tahun 2018.
				</p>

				<div class="form-group">
					<hr>
					{!! Form::label('kategori', 'Kategori') !!}
					{!! Form::select('kategori', [
						'agribisnis' => 'Agribisnis',
						'energi' => 'Energi',
						'kehutanan dan lingkungan hidup '=> 'Kehutanan dan lingkungan hidup',
						'kelautan dan perikanan' => 'Kelautan dan Perikanan',
						'kesehatan obat-obatan dan kosmetika' => 'Kesehatan, obat-obatan dan kosmetika',
						'pendidikan' => 'Pendidikan',
						'rekayasa Teknologi dan manufaktur' => ' Rekayasa Teknologi dan manufaktur',
						'kerajinan dan industri rumah tangga' => 'Kerajinan dan industri rumah tangga',
						'sosial' => 'Sosial'
						], null,
						['class'=>'form-control']) !!}

				</div>
				<hr>
				<h4>PESERTA</h4>

				<div class="form-group">
					<hr>
					{!! Form::label('nama', 'Nama') !!}
					{!! Form::text('nama', null, ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}

				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('alamat', 'Alamat') !!}
					{!! Form::text('alamat', null, ['class'=>'form-control', 'placeholder' => 'Masukkan alamat']) !!}

				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('kabupaten', 'Alamat') !!}
					{!! Form::text('kabupaten', null, ['class'=>'form-control', 'placeholder' => 'Masukkan kabupaten']) !!}

				</div>>
				<div class="form-group">
					<hr>
					{!! Form::label('pekerjaan', 'Alamat') !!}
					{!! Form::text('pekerjaan', null, ['class'=>'form-control', 'placeholder' => 'Masukkan pekerjaan']) !!}

				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('jk', 'Jenis Kelamin') !!}
					{!! Form::select('jk', [
						'pria' => 'Pria',
						'wanita' => 'Wanita'
						], null,
						['class'=>'form-control']) !!}

				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('no_telpp', 'No Telp/HP') !!}
					{!! Form::text('no_telp', null, ['class'=>'form-control', 'placeholder' => 'No Telp / ( HP No Telp Ketua Untuk Kelompok )']) !!}
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('email', 'email') !!}
					{!! Form::text('email', null, ['class'=>'form-control', 'placeholder' => 'email']) !!}
				</div>

				<div class="form-group">
					<hr>
					{!! Form::label('nama kelompok', 'Nama Anggota Kelompok') !!}
					{!! Form::text('anggota_1', null, ['class'=>'form-control', 'placeholder' => 'nama anggota']) !!}
					{!! Form::text('anggota_2', null, ['class'=>'form-control', 'placeholder' => 'nama anggota']) !!}
					{!! Form::text('anggota_3', null, ['class'=>'form-control', 'placeholder' => 'nama anggota']) !!}
					{!! Form::text('anggota_4', null, ['class'=>'form-control', 'placeholder' => 'nama anggota']) !!}
					{!! Form::text('anggota_5', null, ['class'=>'form-control', 'placeholder' => 'nama anggota']) !!}
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('judul', 'Karya yang diusulkan') !!}
					{!! Form::text('judul' , null, ['class'=>'form-control', 'placeholder' => 'Karya yang diusulkan']) !!}
				</div>
				<div class="form-group">
					<hr>
				<div class="form-group">
					<hr>
					{!! Form::label('temuan baru', 'Temuan baru') !!}
					{!! Form::text('temuan', null, ['class'=>'form-control', 'placeholder' => 'Isi untuk temuan baru']) !!}
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('pengembangan', 'Pengembangan dari ') !!}
					{!! Form::text('pengembangan', null, ['class'=>'form-control', 'placeholder' => 'Isi untuk pengembangan dari ']) !!}
				</div>
				<div class="form-group">

            		{{ Form::submit('save-draft', ['save-draft', 'class' => 'btn btn-warning', 'name' => 'submit', 'value' => 'save-draft']) }}

            		{{ Form::submit('save', ['save', 'class' => 'btn btn-danger', 'name' => 'submit', 'value' => 'save']) }}

				</div>
