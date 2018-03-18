 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
		<li class="breadcrumb-item active">Informasi</li>
		<li class="breadcrumb-item active">Daftar Pemenang</li>
      </ol>
		
		

		
		<div class="form-group">
			{!! Form::label('nama', 'Nama') !!}
			{!! Form::text('nama', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('nama_file', 'Daftar Pemenang PDF') !!}
		</div>
		<div class="form-group">
			{!! Form::file('nama_file', null, ['class'=>'form-control']) !!}
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