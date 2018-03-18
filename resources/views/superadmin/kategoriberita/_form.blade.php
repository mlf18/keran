 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
		<li class="breadcrumb-item active">Master Data</li>
		<li class="breadcrumb-item active">Akun</li>
      </ol>
		
		

		
		<div class="form-group">
			{!! Form::label('nama', 'Nama') !!}
			{!! Form::text('nama', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('alamat', 'Alamat') !!}
			{!! Form::text('alamat', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('pekerjaan', 'Pekerjaan') !!}
			{!! Form::text('pekerjaan', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('kabupaten', 'Kabupaten / Kota') !!}
			{!! Form::text('kabupaten', null, ['class'=>'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('no_telp', 'No Telepon/HP') !!}
			{!! Form::text('no_telp', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
					{!! Form::label('role', 'Kategori') !!}
					{!! Form::select('role', [ 
						'-' => '-',
						'superadmin' => 'superadmin',
						'admin' => 'admin',
						'inventor' => 'inventor'
						], null, 
						['class'=>'form-control']) !!}
				
		</div>
		<div class="form-group">
			{!! Form::label('name', 'Username') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Email', 'Email') !!}
			{!! Form::email('email', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', ['class' => 'form-control']); !!}
		</div>
		


		
		<div class="form-group" align="right">
			{!! Form::submit($submitButton, ['class' => 'btn btn-secondary']) !!}				
		</div>
	</div>
</div>