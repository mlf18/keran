@extends('layouts.juri')

@section('section')
 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
		<li class="breadcrumb-item active">Format Penilaian</li>
      </ol>
	  <div class="row">
				<div class="col-12">
					<div class="card mb-3">
						<div class="card-header">Unggah Format Nilai</div>
						<div class="card-body">
						<form>
							<div class="form-group">
								<label for="foto">Unggah Nilai  <br><small>File excel</small></label>
								<input type="file" class="form-control-file" id="file_1"><br>
								<p><a href="{{url('juri-file/Format Penilaian Manual.xlsx')}}">Format Penilaian Manual</a></p>
							</div>
							<button type="button" class="btn btn-success">Kirim</button>
						</form>
						</div>
					</div>
				</div>
		</div>
	</div>
@endsection