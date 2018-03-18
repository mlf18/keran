 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
		<li class="breadcrumb-item active">Master Data</li>
		<li class="breadcrumb-item active">Kabupaten/Kota</li>
      </ol>
		
		

		
		<div class="form-group">
			{!! Form::label('kode', 'Kode') !!}
			{!! Form::text('kode', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('nama', 'Nama') !!}
			{!! Form::text('nama', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group" align="right">
			{!! Form::submit($submitButton, ['class' => 'btn btn-secondary']) !!}				
		</div>
	</div>
</div>