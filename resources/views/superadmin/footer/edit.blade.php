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
	{!! Form::model($edit, ['route' => ['footer.update', $edit->id],'method'=>'PATCH','id'=>'formfooter']) !!}
		@include('superadmin.footer._form',  ['submitButton' => 'Update footer'])
	{!! Form::close() !!}
@endsection