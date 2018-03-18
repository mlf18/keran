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

		{!! Form::model($edit = new \App\User, ['url'=> route('user.store')]) !!}
			@include('superadmin.akun._form', ['submitButton' => 'Add User'])
@endsection