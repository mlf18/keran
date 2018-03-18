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

		{!! Form::model($edit = new \App\Kabupaten, ['url'=> route('kabupaten.store')]) !!}
			@include('superadmin.kabupaten._form', ['submitButton' => 'Tambah Kabupaten'])
@endsection