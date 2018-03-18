@extends('layouts.inventor')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
        <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    <a href="{{url('profil')}}">Dashboard Inventor</a>
                </li>
                <li class="breadcrumb-item active">Profil Inventor</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-header">Profil Inventor</div>
                        <div class="card-body">
                                @if(count($errors)>0)
                                    @foreach ($errors->all() as $e)
                                        <div class="alert alert-danger">
                                        {{$e}}
                                        </div>
                                    @endforeach
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{session('success')}}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{session('error')}}
                                    </div>
                                @endif
                            <form method="post" action="{{url('/inventor/'.$profil->id)}}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama/Kelompok</label>
                                    <input type="text" class="form-control" id="Nama" name="nama" value="{{$profil->nama}}" {{$profil->nama!='' ? '':''}}/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Alamat</label>
                                    <input type="text" class="form-control" id="Alamat" name="alamat" value="{{$profil->alamat}}" {{$profil->alamat!='' ? '':''}}/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kabupaten/Kota</label>
                                    <select class="form-control" id="Kabupaten" name="kabupaten" {{$profil->kabupaten != '' ? 'readonly':''}}>
                                        <option value="banjarnegara" {{$profil->kabupaten=='banjarnegara'?'selected':''}}>Kabupaten Banjarnegara</option>
                                        <option value="banyumas" {{$profil->kabupaten=='banyumas'?'selected':''}}>Kabupaten Banyumas</option>
                                        <option value="batang" {{$profil->kabupaten=='batang'?'selected':''}} >Kabupaten Batang</option>
                                        <option value="blora" {{$profil->kabupaten=='blora'?'selected':''}}>Kabupaten Blora</option>
                                        <option value="boyolali" {{$profil->kabupaten=='boyolali'?'selected':''}}>Kabupaten Boyolali</option>
                                        <option value="brebes" {{$profil->kabupaten=='brebes'?'selected':''}}>Kabupaten Brebes</option>
                                        <option value="cilacap" {{$profil->kabupaten=='cilacap'?'selected':''}}>Kabupaten Cilacap</option>
                                        <option value="demak" {{$profil->kabupaten=='demak'?'selected':''}}>Kabupaten Demak</option>
                                        <option value="grobogan" {{$profil->kabupaten=='grobogan'?'selected':''}}>Kabupaten Grobogan</option>
                                        
                                        <option value="jepara" {{$profil->kabupaten=='jepara'?'selected':''}}>Kabupaten Jepara</option>
                                        <option value="karanganyar" {{$profil->kabupaten=='karanganyar'?'selected':''}}>Kabupaten Karanganyar</option>
                                        <option value="kebumen" {{$profil->kabupaten=='kebumen'?'selected':''}}>Kabupaten Kebumen</option>
                                        <option value="kendal" {{$profil->kabupaten=='kendal'?'selected':''}}>Kabupaten Kendal</option>
                                        <option value="klaten" {{$profil->kabupaten=='klaten'?'selected':''}}>Kabupaten Klaten</option>
                                        <option value="kudus" {{$profil->kabupaten=='kudus'?'selected':''}}>Kabupaten Kudus</option>
                                        <option value="magelang" {{$profil->kabupaten=='magelang'?'selected':''}}>Kabupaten Magelang</option>
                                        <option value="pati" {{$profil->kabupaten=='pati'?'selected':''}}>Kabupaten Pati</option>
                                        <option value="pekalongan" {{$profil->kabupaten=='pekalongan'?'selected':''}}>Kabupaten Pekalongan</option>
                                        
                                        <option value="pemalang" {{$profil->kabupaten=='pemalang'?'selected':''}}>Kabupaten Pemalang</option>
                                        <option value="purbalingga" {{$profil->kabupaten=='purbalingga'?'selected':''}}>Kabupaten Purbalingga</option>
                                        <option value="purworejo" {{$profil->kabupaten=='purworejo'?'selected':''}}>Kabupaten Purworejo</option>
                                        <option value="rembang" {{$profil->kabupaten=='rembang'?'selected':''}}>Kabupaten Rembang</option>
                                        <option value="semarang" {{$profil->kabupaten=='semarang'?'selected':''}}>Kabupaten Semarang</option>
                                        <option value="sragen" {{$profil->kabupaten=='sragen'?'selected':''}}>Kabupaten Sragen</option>
                                        <option value="sukoharjo" {{$profil->kabupaten=='sukoharjo'?'selected':''}}>Kabupaten Sukoharjo</option>
                                        <option value="tegal" {{$profil->kabupaten=='tegal'?'selected':''}}>Kabupaten Tegal</option>
                                        <option value="temanggung" {{$profil->kabupaten=='temanggung'?'selected':''}}>Kabupaten Temanggung</option>
                                        
                                        <option value="wonogiri" {{$profil->kabupaten=='wonogiri'?'selected':''}}>Kabupaten Wonogiri</option>
                                        <option value="wonosobo" {{$profil->kabupaten=='wonosobo'?'selected':''}}>Kabupaten Wonosobo</option>
                                        <option value="kota magelang" {{$profil->kabupaten=='kota magelang'?'selected':''}}>Kota Magelang</option>
                                        <option value="kota pekalongan" {{$profil->kabupaten=='kota pekalongan'?'selected':''}}>Kota Pekalongan</option>
                                        <option value="kota salatiga" {{$profil->kabupaten=='kota salatiga'?'selected':''}}>Kota Salatiga</option>
                                        <option value="kota semarang" {{$profil->kabupaten=='kota semarang'?'selected':''}}>Kota Semarang</option>
                                        <option value="kota surakarta" {{$profil->kabupaten=='kota surakarta'?'selected':''}}>Kota Surakarta</option>
                                        <option value="kota tegal" {{$profil->kabupaten=='kota tegal'?'selected':''}}>Kota Tegal</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">No Telepon/HP</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{$profil->no_telp}}" {{$profil->no_telp !='' ? '':''}}/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Alamat Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$profil->email}}" {{$profil->email !='' ? '':''}}/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Judul Temuan/Inovasi</label>
                                    <input type="text" class="form-control" id="inovasi" name="inovasi" value="{{$profil->judul}}" {{$profil->judul != '' ? '':''}}/>
                                </div>
                                <button type="submit" class="btn btn-primary" >Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
