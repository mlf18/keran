@extends ('layouts.superadmin')
@section ('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
		<li class="breadcrumb-item active">Informasi</li>
		<li class="breadcrumb-item active">Berita</li>
      </ol>
	  <div class="row">
				<div class="col-12">
					<div class="card mb-3">
						<div class="card-header"><a href="{{url('article/create')}}" class="btn btn-primary">Tambah Berita</a></div>
						<div class="card-body">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th width="5%">No</th>
										<th width="25%">Judul</th>
										<th>Gambar</th>
										<th width="25%">Kategori</th>
										<th width="25%">Pilihan</th>
									</tr>
								</thead>
									<tfoot>
										<tr>
										  <th>No</th>
										  <th>Judul</th>
										  <th>Gambar</th>
										  <th >Kategori</th>
										  <th>Pilihan</th>
										</tr>
									</tfoot>
									<tbody>
                                        @foreach($article as $a)
										<tr>
											<td>{{$a->id}}</td>
											<td>{{$a->judul}}</td>
											<td><img src="{{url('file/'.$a->gambar)}}" width="200px" height="200px" class="img-thumbnail"></td>
                                            <td>{{$a->kategori}}</td>
                                            <form method="post" action="{{url('article/'.$a->id)}}">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
											<td><button type="submit" class="btn btn-danger">Hapus</button>
												<a href="{{url('article/'.$a->id.'/edit')}}" class="btn btn-primary">Edit</a>
                                            </td>
                                        </form>
                                        </tr>
                                        @endforeach
									</tbody>
							</table>	
						</div>
					</div>
				</div>
			</div>
	</div>
</div>
@endsection