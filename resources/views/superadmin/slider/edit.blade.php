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
	{!! Form::model($edit, ['route' => ['slider.update', $edit->id],'method'=>'PATCH','id'=>'formslider','enctype' => 'multipart/form-data']) !!}
		@include('superadmin.slider._form',  ['submitButton' => 'Update Slider'])
	{!! Form::close() !!}
@endsection