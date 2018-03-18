 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      @include('layouts.pesan')
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
		<li class="breadcrumb-item active">Master Data</li>
		<li class="breadcrumb-item active">Akun</li>
      </ol>
		<div class="form-group">
			{!! Form::label('alamat', 'Alamat') !!}
			{!! Form::textarea('alamat', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('website', 'Alamat Website') !!}
			{!! Form::text('website', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::text('email', null, ['class'=>'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('phone', 'No Telephone / HP') !!}
			{!! Form::text('phone', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fax', 'Faks') !!}
			{!! Form::text('fax', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('url_fb', 'URL Facebook') !!}
			{!! Form::text('url_fb', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('url_twitt', 'URL Twitter') !!}
			{!! Form::text('url_twitt', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('url_ig', 'URL Instagram') !!}
			{!! Form::text('url_ig', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('url_web', 'URL Website') !!}
			{!! Form::text('url_web', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('url_hashtag', 'URL Hashtag Twitter') !!}
			{!! Form::text('url_hashtag', null, ['class'=>'form-control']) !!}
		</div>
	
		
		


		
		<div class="form-group" align="right">
			{!! Form::submit($submitButton, ['class' => 'btn btn-secondary']) !!}				
		</div>
	</div>
</div>