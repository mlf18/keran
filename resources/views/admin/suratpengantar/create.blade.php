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

		{!! Form::model($edit = new \App\Pengantarkota, ['url'=> route('pengantarkota.store'), 'enctype' => 'multipart/form-data']) !!}
			@include('admin.suratpengantar._form', ['submitButton' => 'Kirim Pengantar Kota'])
@endsection