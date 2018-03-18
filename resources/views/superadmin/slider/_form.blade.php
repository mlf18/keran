 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
		<li class="breadcrumb-item active">Master Website</li>
		<li class="breadcrumb-item active">Slider</li>
      </ol>
		{{ csrf_field() }}
		

		
		<div class="form-group">
			{!! Form::label('Gambar', 'Gambar') !!} </br>
			{!! Form::file('nama_slider',  ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('penjelasan', 'Penjelasan') !!}
			{!! Form::text('nama', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
					{!! Form::label('status', 'Status') !!}
					{!! Form::select('status', [ 
						'tampil' => 'Tampil',
						'tidak tampil' => 'Tidak Tampil'
						], null, 
						['class'=>'form-control']) !!}
				
		</div>
		
		


		
		<div class="form-group" align="right">
			{!! Form::submit($submitButton, ['class' => 'btn btn-secondary']) !!}				
		</div>
	</div>
</div>