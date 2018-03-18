@extends ('layouts.admin')
@section ('content')
 <div class="content-wrapper">
    <div class="container-fluid">
      @include('layouts.pesan')
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('admin')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Data Inventor</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <div class="card mb-3">
            <div class="card-header"><a type="button" class="btn btn-primary" href="{{url('/inventor/create')}}">Tambah Inventor</a> </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Pekerjaan</th>
                      <th>No Telp</th>
                      <th>Email</th>
                    <th>Pilihan</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th width="5%">No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                            <th>No Telp</th>
                            <th>Email</th>
                    <th>Pilihan</th>
                          </tr>
                        </tfoot>
                         

                        <tbody>
                          <?php $ip=1;?>
                          @foreach($admins->profil as $profil)
                          
                          <tr>
                              
                            <td>{{ $ip++ }}</td>
                            <td>{{ $profil->nama!=''?$profil->nama:'-' }}</td>
                            <td>{{ $profil->alamat!=''?$profil->alamat:'-' }}</td>
                            <td>
                            @if(count($profil->inventor)>0)
                              @foreach($profil->inventor as $i)
                                  {{ $i->pekerjaan!=''?$i->pekerjaan:'-'  }}
                              @endforeach
                            @else
                              -
                            @endif
                             </td>
                            <td>{{ $profil->no_telp!=''?$profil->no_telp:'-' }}</td>
                            <td>{{ $profil->email!=''?$profil->email:'-' }}</td>
                            <td><a href="{{url('admin/editprofil/'.$profil->id)}}" class="btn btn-primary">Edit</a> 
                              <form method="post" action="{{url('/admin/deletesprofil/'.$profil->id)}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <button type="submit" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger">Hapus</button>
                              </form>
                            </td>
                        
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