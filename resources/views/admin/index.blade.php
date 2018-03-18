@extends ('layouts.admin')
@section ('content')
<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.pesan')
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
            <i class="fa fa-fw fa-sign-in"></i>
            </div>
            <div class="mr-5"><b>Pendaftaran Bupati/Walikota Pelopor Inovasi Daerah</b></div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="{{url('adminkuesioner/'.Auth::user()->admin->id)}}">
            <span class="float-left">Lihat Kuesioner Pendaftaran Bupati/Walikota </span>
            <span class="float-right">
            <i class="fa fa-angle-right"></i>
            </span>
          </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
            <i class="fa fa-fw fa-key"></i>
            </div>
            <div class="mr-5"><b>Ganti Password</b></div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="{{url('admin/resetpassword')}}">
            <span class="float-left">Ganti Password</span>
            <span class="float-right">
            <i class="fa fa-angle-right"></i>
            </span>
          </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-3">
            <div class="card-body">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="25%">Nama</th>
                    <th width="25%">Tanggal</th>
                    <th width="25%">Pilihan</th>
                  </tr>
                </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Pilihan</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php $i=1; ?>
                                        @foreach($drafts as $draft)
                    <tr>
                      <td>{{$i++}}</td>
                                            <td>Draft_{{$draft->id}}</td>
                                            <td>{{$draft->created_at}}</td>
                                            <td><a href="{{url('admin/draft/'.$draft->id)}}">Lanjutkan</a></td>
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