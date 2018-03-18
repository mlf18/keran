@extends ('layouts.superadmin')
@section ('content')

  <div class="content-wrapper">
    <div class="container-fluid">
      @include('layouts.pesan')
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard Superadmin</a>
        </li>
      </ol>
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5"> {{ $counts}} Proposal Terkirim </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{url('superadmin/listproposal')}}">
              <span class="float-left">Selengkapnya</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        
        
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">{{ $unaproves}} Proposal Belum Terkirim</div>
            </div>
           
            <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#proposalmodal">
              <span class="float-left">Selengkapnya</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="proposalmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="proposalmodal">Proposal Belum Terkirim Provinsi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-bordered"  width="75%" cellspacing="0">
                  <thead>
                    <?php  $i = 1; ?>
                      <tr>
                        <th width="5%">No</th>
                        <th>Nama</th>
                        <th>Judul</th>
                        <th>Kabupaten / Kota</th>
                        <th>Status</th>
                      </tr>
                  </thead>
                  
                  <tbody>
                  @foreach ($profils as $p)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $p->profil->nama }}</td>
                        <td>{{ $p->profil->judul }}</td>
                        <td>{{ $p->profil->kabupaten }}</td>
                        <td>

                            @if ($p->status == '2')
                              Terkirim Kabupaten / Kota
                            @else
                              Terkirim Provinsi 
                            @endif
                        </td>
                      </tr>
                 @endforeach
                  </tbody>  

               </table> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
         

@endsection	

