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
        <li class="breadcrumb-item active">Data Pengusul </li>
      </ol>
      <div class="row">
        <div class="col-12">
          <div class="card mb-3">
        <div class="card-header">Data Pengusul  </div>
        <div class="card-body">
		<form method="post" action="{{url('adminprofil')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{$admin->nama}}">
  </div>
  <div class="form-group">
    <label for="jabatan">Jabatan</label>
    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{$admin->pekerjaan}}">
  </div>
  <div class="form-group">
    <label for="jabatan">Lembaga/instansi</label>
    <input type="text" class="form-control" id="lembaga" name="lembaga" value="{{$admin->lembaga}}">
  </div>
  <div class="form-group">
    <label for="jabatan">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
  </div>
  <div class="form-group">
    <label for="jabatan">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" value="{{$admin->alamat}}">
  </div>
  <div class="form-group">
    <label for="kabupaten">Kabupaten/Kota</label>
    <select class="form-control" id="Kabupaten" name="kabupaten" {{$admin->kabupaten != '' ? '':''}}>
        <option value="banjarnegara" {{$admin->kabupaten=='banjarnegara'?'selected':''}}>Kabupaten Banjarnegara</option>
        <option value="banyumas" {{$admin->kabupaten=='banyumas'?'selected':''}}>Kabupaten Banyumas</option>
        <option value="batang" {{$admin->kabupaten=='batang'?'selected':''}} >Kabupaten Batang</option>
        <option value="blora" {{$admin->kabupaten=='blora'?'selected':''}}>Kabupaten Blora</option>
        <option value="boyolali" {{$admin->kabupaten=='boyolali'?'selected':''}}>Kabupaten Boyolali</option>
        <option value="brebes" {{$admin->kabupaten=='brebes'?'selected':''}}>Kabupaten Brebes</option>
        <option value="cilacap" {{$admin->kabupaten=='cilacap'?'selected':''}}>Kabupaten Cilacap</option>
        <option value="demak" {{$admin->kabupaten=='demak'?'selected':''}}>Kabupaten Demak</option>
        <option value="grobogan" {{$admin->kabupaten=='grobogan'?'selected':''}}>Kabupaten Grobogan</option>
        
        <option value="jepara" {{$admin->kabupaten=='jepara'?'selected':''}}>Kabupaten Jepara</option>
        <option value="karanganyar" {{$admin->kabupaten=='karanganyar'?'selected':''}}>Kabupaten Karanganyar</option>
        <option value="kebumen" {{$admin->kabupaten=='kebumen'?'selected':''}}>Kabupaten Kebumen</option>
        <option value="kendal" {{$admin->kabupaten=='kendal'?'selected':''}}>Kabupaten Kendal</option>
        <option value="klaten" {{$admin->kabupaten=='klaten'?'selected':''}}>Kabupaten Klaten</option>
        <option value="kudus" {{$admin->kabupaten=='kudus'?'selected':''}}>Kabupaten Kudus</option>
        <option value="magelang" {{$admin->kabupaten=='magelang'?'selected':''}}>Kabupaten Magelang</option>
        <option value="pati" {{$admin->kabupaten=='pati'?'selected':''}}>Kabupaten Pati</option>
        <option value="pekalongan" {{$admin->kabupaten=='pekalongan'?'selected':''}}>Kabupaten Pekalongan</option>
        
        <option value="pemalang" {{$admin->kabupaten=='pemalang'?'selected':''}}>Kabupaten Pemalang</option>
        <option value="purbalingga" {{$admin->kabupaten=='purbalingga'?'selected':''}}>Kabupaten Purbalingga</option>
        <option value="purworejo" {{$admin->kabupaten=='purworejo'?'selected':''}}>Kabupaten Purworejo</option>
        <option value="rembang" {{$admin->kabupaten=='rembang'?'selected':''}}>Kabupaten Rembang</option>
        <option value="semarang" {{$admin->kabupaten=='semarang'?'selected':''}}>Kabupaten Semarang</option>
        <option value="sragen" {{$admin->kabupaten=='sragen'?'selected':''}}>Kabupaten Sragen</option>
        <option value="sukoharjo" {{$admin->kabupaten=='sukoharjo'?'selected':''}}>Kabupaten Sukoharjo</option>
        <option value="tegal" {{$admin->kabupaten=='tegal'?'selected':''}}>Kabupaten Tegal</option>
        <option value="temanggung" {{$admin->kabupaten=='temanggung'?'selected':''}}>Kabupaten Temanggung</option>
        
        <option value="wonogiri" {{$admin->kabupaten=='wonogiri'?'selected':''}}>Kabupaten Wonogiri</option>
        <option value="wonosobo" {{$admin->kabupaten=='wonosobo'?'selected':''}}>Kabupaten Wonosobo</option>
        <option value="kota magelang" {{$admin->kabupaten=='kota magelang'?'selected':''}}>Kota Magelang</option>
        <option value="kota pekalongan" {{$admin->kabupaten=='kota pekalongan'?'selected':''}}>Kota Pekalongan</option>
        <option value="kota salatiga" {{$admin->kabupaten=='kota salatiga'?'selected':''}}>Kota Salatiga</option>
        <option value="kota semarang" {{$admin->kabupaten=='kota semarang'?'selected':''}}>Kota Semarang</option>
        <option value="kota surakarta" {{$admin->kabupaten=='kota surakarta'?'selected':''}}>Kota Surakarta</option>
        <option value="kota tegal" {{$admin->kabupaten=='kota tegal'?'selected':''}}>Kota Tegal</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="jabatan">No Telepon/HP</label>
    <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{$admin->no_telp}}">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
  </div>
          </div>
       
      </div>
    
        </div>
		
		
      </div>
    </div>
@endsection