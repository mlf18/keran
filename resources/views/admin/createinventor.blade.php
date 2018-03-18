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
            
            <li class="breadcrumb-item active">
                <a href="{{url('admin/datainventor')}}"> Data Inventor</a>
            </li>
            <li class="breadcrumb-item active">
                Tambah Inventor
            </li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">Tambah Inventor</div>
                    <div class="card-body">
                        <form method="POST" action="{{url('/inventor')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                <label for="exampleFormControlInput1">Nama/Kelompok</label>
                <input type="text" class="form-control" id="Nama" name="nama">
                </div>
                 <div class="form-group">
                <label for="exampleFormControlInput1">Alamat</label>
                <input type="text" class="form-control" id="Alamat" name="alamat">
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Kabupaten/Kota</label>
                <select class="form-control" id="kabupaten" name="kabupaten">
                                <option value="banjarnegara" {{Auth::user()->admin->kabupaten=='banjarnegara'?'selected':''}}>Kabupaten Banjarnegara</option>
                                <option value="banyumas" {{Auth::user()->admin->kabupaten=='banyumas'?'selected':''}}>Kabupaten Banyumas</option>
                                <option value="batang" {{Auth::user()->admin->kabupaten=='batang'?'selected':''}}>Kabupaten Batang</option>
                                <option value="blora" {{Auth::user()->admin->kabupaten=='blora'?'selected':''}}>Kabupaten Blora</option>
                                <option value="boyolali" {{Auth::user()->admin->kabupaten=='boyolali'?'selected':''}}>Kabupaten Boyolali</option>
                                <option value="brebes" {{Auth::user()->admin->kabupaten=='brebes'?'selected':''}}>Kabupaten Brebes</option>
                                <option value="cilacap" {{Auth::user()->admin->kabupaten=='cilacap'?'selected':''}}>Kabupaten Cilacap</option>
                                <option value="demak" {{Auth::user()->admin->kabupaten=='demak'?'selected':''}}>Kabupaten Demak</option>
                                <option value="grobogan" {{Auth::user()->admin->kabupaten=='grobogan'?'selected':''}}>Kabupaten Grobogan</option>
                                
                                <option value="jepara" {{Auth::user()->admin->kabupaten=='jepara'?'selected':''}}>Kabupaten Jepara</option>
                                <option value="karanganyar" {{Auth::user()->admin->kabupaten=='karanganyar'?'selected':''}}>Kabupaten Karanganyar</option>
                                <option value="kebumen" {{Auth::user()->admin->kabupaten=='kebumen'?'selected':''}}>Kabupaten Kebumen</option>
                                <option value="kendal" {{Auth::user()->admin->kabupaten=='kendal'?'selected':''}}>Kabupaten Kendal</option>
                                <option value="klaten" {{Auth::user()->admin->kabupaten=='klaten'?'selected':''}}>Kabupaten Klaten</option>
                                <option value="kudus" {{Auth::user()->admin->kabupaten=='kudus'?'selected':''}}>Kabupaten Kudus</option>
                                <option value="magelang" {{Auth::user()->admin->kabupaten=='magelang'?'selected':''}}>Kabupaten Magelang</option>
                                <option value="pati" {{Auth::user()->admin->kabupaten=='pati'?'selected':''}}>Kabupaten Pati</option>
                                <option value="pekalongan" {{Auth::user()->admin->kabupaten=='pekalongan'?'selected':''}}>Kabupaten Pekalongan</option>
                                
                                <option value="pemalang" {{Auth::user()->admin->kabupaten=='pemalang'?'selected':''}}>Kabupaten Pemalang</option>
                                <option value="purbalingga" {{Auth::user()->admin->kabupaten=='purbalingga'?'selected':''}}>Kabupaten Purbalingga</option>
                                <option value="purworejo" {{Auth::user()->admin->kabupaten=='purworejo'?'selected':''}}>Kabupaten Purworejo</option>
                                <option value="rembang" {{Auth::user()->admin->kabupaten=='rembang'?'selected':''}}>Kabupaten Rembang</option>
                                <option value="semarang" {{Auth::user()->admin->kabupaten=='semarang'?'selected':''}}>Kabupaten Semarang</option>
                                <option value="sragen" {{Auth::user()->admin->kabupaten=='sragen'?'selected':''}}>Kabupaten Sragen</option>
                                <option value="sukoharjo" {{Auth::user()->admin->kabupaten=='sukoharjo'?'selected':''}}>Kabupaten Sukoharjo</option>
                                <option value="tegal" {{Auth::user()->admin->kabupaten=='tegal'?'selected':''}}>Kabupaten Tegal</option>
                                <option value="temanggung" {{Auth::user()->admin->kabupaten=='temanggung'?'selected':''}}>Kabupaten Temanggung</option>
                                
                                <option value="wonogiri" {{Auth::user()->admin->kabupaten=='wonogiri'?'selected':''}}>Kabupaten Wonogiri</option>
                                <option value="wonosobo" {{Auth::user()->admin->kabupaten=='wonosobo'?'selected':''}}>Kabupaten Wonosobo</option>
                                <option value="kota magelang" {{Auth::user()->admin->kabupaten=='kota magelang'?'selected':''}}>Kota Magelang</option>
                                <option value="kota pekalongan" {{Auth::user()->admin->kabupaten=='kota pekalongan'?'selected':''}}>Kota Pekalongan</option>
                                <option value="kota salatiga" {{Auth::user()->admin->kabupaten=='kota salatiga'?'selected':''}}>Kota Salatiga</option>
                                <option value="kota semarang" {{Auth::user()->admin->kabupaten=='kota semarang'?'selected':''}}>Kota Semarang</option>
                                <option value="kota surakarta" {{Auth::user()->admin->kabupaten=='kota surakarta'?'selected':''}}>Kota Surakarta</option>
                                <option value="kota tegal" {{Auth::user()->admin->kabupaten=='kota tegal'?'selected':''}}>Kota Tegal</option>
                </select>
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">No Telepon/HP</label>
                <input type="text" class="form-control" id="no" name="no_telp">
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Alamat Email</label>
                <input type="email" class="form-control" id="e-mail" name="email">
                </div>
                 <div class="form-group">
                <label for="exampleFormControlSelect1">Judul Temuan/Inovasi</label>
                <input type="text" class="form-control" id="inovasi" name="inovasi">
                </div>
                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                </div>
                 <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection