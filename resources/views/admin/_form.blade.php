@extends('layouts.admin')

@section('section')
	<div class="container">
		<div class="row">
      <div class="row">
        <div class="col-lg-8">

          <div class="card mb-3">
            <div class="card-header">
              <i class="fa  fa-pencil "><h3>FORMULIR KUESIONER BUPATI/WALIKOTA PELOPOR INOVASI DAERAH</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-8 my-auto">
                  {!! Form::open(array('route' => 'bupati.store', 'method'=>'POST')) !!}


            				{!! Form::label('nama_kabupaten', 'Nama Kabupaten / Kota  ') !!}

            				{!! Form::select('kategori', [


            					'Kabupaten Cilacap' =>'Kabupaten Cilacap',

            					'Kabupaten Banyumas' =>'Kabupaten Banyumas',

            					'Kabupaten Purbalingga' =>'Kabupaten Purbalingga' ,

            					'Kabupaten Banjarnegara' => 'Kabupaten Banjarnegara',

            					'Kabupaten Kebumen' => 'Kabupaten Kebumen',

            					'Kabupaten Purworejo' => 'Kabupaten Purworejo',

            					'Kabupaten Wonosobo' => 'Kabupaten Wonosobo',

            					'Kabupaten Magelang' => 'Kabupaten Magelang',

            					'Kabupaten Boyolali' => 'Kabupaten Boyolali',

            					'Kabupaten Klaten' => 'Kabupaten Klaten',

            					'Kabupaten Sukoharjo' => 'Kabupaten Sukoharjo',

            					'Kabupaten Wonogiri' => 'Kabupaten Wonogiri',

            					'Kabupaten Karanganyar' => 'Kabupaten Karanganyar',

            					'Kabupaten Sragen' => 'Kabupaten Sragen',

            					'Kabupaten Grobogan' => 'Kabupaten Grobogan',

            					'Kabupaten Blora' => 'Kabupaten Blora',

            					'Kabupaten Rembang' => 'Kabupaten Rembang',

            					'Kabupaten Pati' => 'Kabupaten Pati',

            					'Kabupaten Kudus' => 'Kabupaten Kudus',

            					'Kabupaten Jepara' => 'Kabupaten Jepara',

            					'Kabupaten Demak' => 'Kabupaten Demak',

            					'Kabupaten Semarang' => 'Kabupaten Semarang',

            					'Kabupaten Temanggung' => 'Kabupaten Temanggung',

            					'Kabupaten Kendal' => 'Kabupaten Kendal',

            					'Kabupaten Batang' => 'Kabupaten Batang',

            					'Kabupaten Pekalongan' => 'Kabupaten Pekalongan',

            					'Kabupaten Pemalang' =>'Kabupaten Pemalang',

            					'Kabupaten Tegal' =>'Kabupaten Tegal',

            					'Kabupaten Brebes' => 'Kabupaten Brebes',

            					'Kota Magelang' => 'Kota Magelang',

            					'Kota Surakarta' => 'Kota Surakarta',

            					'Kota Salatiga' => 'Kota Salatiga',

            					'Kota Semarang' => 'Kota Semarang',

            					'Kota Pekalongan' =>'Kota Pekalongan',

            					'Kota Tegal' => 'Kota Tegal'
            			], null,
            						['class'=>'form-control']) !!}


            				<div class="form-group">
            					<hr>
            					<h4>ALOKASI ANGGARAN</h4>
            					{!! Form::label('alokasi_anggaran', 'Berapa alokasi anggaran untuk kelitbangan Iptekin dari total APBD?  ') !!}
            					{!! Form::text('alokasi_anggaran', null, ['class'=>'form-control', 'placeholder' => 'jelaskan secara spesifik dalam Rp.      dan ']) !!}
            				</div>
            				<div class="form-group">
            					<hr>
            					<h4>PERATURAN DAERAH</h4>
            					<hr>
            					{!! Form::label('perda', 'Adakah peraturan-peraturan daerah yang mendukung kelitbangan Iptekin.? ') !!}
            					{!! Form::text('perda', null, ['class'=>'form-control', 'placeholder' => 'jelaskan dengan singkat']) !!}
            				</div>
            				<div class="form-group">
            					<hr>
            					<h4>MoU/KERJASAMA</h4>
            					{!! Form::label('mou', 'Adakah MoU/Kerjasama terkait Kelitbangan Iptekin dengan Kementerian, Lembaga Litbang Pusat & Daerah serta Perguruan Tinggi?') !!}
            					{!! Form::text('mou', null, ['class'=>'form-control', 'placeholder' => 'Lengkapi/lampirkan dengan bukti']) !!}
            				</div>
            				<div class="form-group">
            					<hr>
            					<h4>PAMERAN / LOMBA</h4>
            					{!! Form::label('lomba_kab', 'a)	Adakah penyelenggaraan lomba Krenova tingkat kab/kota?  ') !!}
            					{!! Form::text('lomba_kab', null, ['class'=>'form-control', 'placeholder' => 'jelaskan']) !!}
            					{!! Form::label('pameran_kab', 'b) Adakah penyelenggaraan pameran produk inovasi tingkat kab/kota.?') !!}
            					{!! Form::text('pameran_kab', null, ['class'=>'form-control', 'placeholder' => 'jelaskan']) !!}
            				</div>
            				<div class="form-group">
            					<hr>
            					<h4>JUMLAH PESERTA LOMBA KRENOVA / PAMERAN</h4>
            					{!! Form::label('jumlah_lombakab', 'a)	Berapa jumlah peserta yang mengikuti lomba krenova kab/kota.? ') !!}
            					{!! Form::text('jumlah_lombakab', null, ['class'=>'form-control', 'placeholder' => '(Lengkapi/lampirkan dengan bukti)']) !!}
            					{!! Form::label('jumlah_pamerankab', 'b)	Berapa jumlah peserta pameran produk inovasi (PPI) ?') !!}
            					{!! Form::text('jumlah_pamerankab', null, ['class'=>'form-control', 'placeholder' => 'Lengkapi/lampirkan dengan bukti)']) !!}
            				</div>
            				<div class="form-group">
            					<hr>
            					<h4>JUMLAH PEMENANG LOMBA KRENOVA TINGKAT PROVINSI</h4>
            					{!! Form::label('pemenang_provinsi', 'Berapa jumlah pemenang Lomba Krenova di tingkat Provins Tahun 2018 ?) ?') !!}
            					{!! Form::text('pemenang_provinsi', null, ['class'=>'form-control', 'placeholder' => ' diisi oleh tim Bappeda Provinsi']) !!}

            				</div>
                    {{ Form::submit('Save Draft', array('class' => 'btn btn-primary')) }}
            				{{ Form::submit('Submit', array('class' => 'btn btn-success')) }}

            			{!! Form::Close() !!}}

                </div>

              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

			</div>

		</div>
	</div>
@endsection
