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
	{!! Form::model($edit, ['route' => ['kabupaten.update', $edit->id],'method'=>'PATCH','id'=>'kabupaten']) !!}
		@include('superadmin.kabupaten._form',  ['submitButton' => 'Update kabupaten'])
	{!! Form::close() !!}
@endsection