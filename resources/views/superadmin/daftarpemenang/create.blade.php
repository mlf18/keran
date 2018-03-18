@extends ('layouts.superadmin')
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

		{!! Form::model($edit = new \App\Daftarpemenang, ['url'=> route('daftarpemenang.store'), 'enctype' => 'multipart/form-data']) !!}
			@include('superadmin.daftarpemenang._form', ['submitButton' => 'Tambah Daftar Pemenang'])
@endsection