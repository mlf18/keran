@extends ('layouts.admin')
@section ('content')
	@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		{!! Form::model($edit = new \App\Panduan, ['url'=> route('panduansuperadmin.store'), 'enctype' => 'multipart/form-data']) !!}
			@include('superadmin.panduan._form', ['submitButton' => 'Tambah Panduhan'])
@endsection