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
	{!! Form::model($edit, ['route' => ['daftarpemenang.update', $edit->id],'method'=>'PATCH','id'=>'formpanduan', 'enctype' => 'multipart/form-data']) !!}
		@include('superadmin.daftarpemenang._form',  ['submitButton' => 'Update Daftar Pemenang'])
	{!! Form::close() !!}
@endsection
