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

	
	{!! Form::model($edit, ['route' => ['user.update', $edit->id],'method'=>'PATCH','id'=>'formUser']) !!}
		@include('superadmin.akun._form',  ['submitButton' => 'Update User'])
	{!! Form::close() !!}
@endsection