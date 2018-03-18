<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>KRENOVA JAWA TENGAH</title>
  <!-- Bootstrap core CSS-->

  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ route('superadmin.index') }}">Dashboard {{ Auth::user()->name }}</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
    
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profil Super Admin">
          <a class="nav-link" href="{{route('superadmin.create')}}">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Profil Super Admin</span>
          </a>
        </li>
    
    
        
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Master Data">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#masterdata" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Master Data</span>
          </a>
          <ul class="sidenav-second-level collapse" id="masterdata">
      <li>
              <a href="{{route('user.index')}}"> Akun</a>
            </li>
            <li>
              <a href="{{url('superadmin/daftarkabupaten')}}"> Kab/Kota</a>
            </li>
            <li>
              <a href="{{url('superadmin/listproposal')}}"> Proposal</a>
            </li>
            
            <li>
              <a href="{{url('superadmin/vote')}}"> Voters</a>
            </li>
      <li>
              <a href="{{url('superadmin/pemenang')}}"> Pemenang Lomba</a>
            </li>
            
          </ul>
        </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Master Website">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#materdata1" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-globe"></i>
            <span class="nav-link-text">Master Website</span>
          </a>
          <ul class="sidenav-second-level collapse" id="materdata1">
      
            <li>
              <a href="{{route('slider.index')}}"> Slider</a>
            </li>
      <li>
              <a href="{{route('footer.index')}}"> Footer</a>
            </li>
          </ul>
        </li>
    
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Informasi">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#info" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-info"></i>
            <span class="nav-link-text">Informasi</span>
          </a>
          <ul class="sidenav-second-level collapse" id="info">
            <li>
              <a href="{{route('article.index')}}">Berita</a>
            </li>
      <li>
              <a href="{{route('panduansuperadmin.index')}}">Panduan</a>
            </li>
      <li>
              <a href="{{route('daftarpemenang.index')}}">Daftar Pemenang</a>
            </li>            
          </ul>
        </li>
    
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Laporan">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#laporan" data-parent="#exampleAccordion">
            <i class="fa fa-fw  fa-file-text-o"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="laporan">
      <li>
              <a href="{{url('superadmin/hasilvoting')}}">Hasil Voting</a>
            </li>
            <li>
              <a href="{{url('superadmin/daftarpeserta')}}">Daftar Peserta Krenova Tahun 2018</a>
            </li> 
      <li>
              <a href="{{url('superadmin/rekappenilaian')}}">Rekap Penilaian</a>
            </li>       
          </ul>
        </li>
    
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ganti Password">
          <a class="nav-link" href="{{url('superadmin/resetpassword')}}">
            <i class="fa fa-fw fa-key"></i>
            <span class="nav-link-text">Ganti Password</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      
        
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Keluar</a>
        </li>
      </ul>
    </div>
  </nav>

     
    
      <!-- Icon Cards-->

      <!-- Area Chart Example-->

      @yield('content')

      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © UPP IPTEKIN BAPPEDA PROVINSI JAWA TENGAH 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="{{ url('/logout') }}"">Keluar</a>
          </div>
        </div>
      </div>
    </div>

    
    
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin.min.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('js/sb-admin-datatables.min.js') }}"></script>
  <script>
  
</script>
  </div>
</body>

</html>