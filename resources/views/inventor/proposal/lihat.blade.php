@extends ('layouts.inventor')
@section ('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('layouts.pesan')
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="{{url('/inventor')}}">Dashboard Inventor</a>
            </li>
            <li class="breadcrumb-item active">Pengajuan Proposal</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-header">Pengajuan Proposal</div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pendaftaran-tab" data-toggle="tab" href="#pendaftaran" role="tab" aria-controls="pendaftaran" aria-selected="true">Formulir Pendaftaran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="kuesioner-tab" data-toggle="tab" href="#kuesioner" role="tab" aria-controls="kuesioner" aria-selected="false">Kuesioner Temuan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="proposal-tab" data-toggle="tab" href="#proposal" role="tab" aria-controls="contact" aria-selected="false">Proposal</a>
                                </li>
                            </ul>
                            <form method="POST" action="{{url('/proposal')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <div class="tab-content" id="myTabContent">    
                                    <div class="tab-pane fade show active" id="pendaftaran" role="tabpanel" aria-labelledby="pendaftaran-tab">
                                    {{--  <form method="POST" action="{{url('/proposals')}}" readonly>
                                        {{ csrf_field() }}  --}}
                                        
                                        <div class="form-group">
                                            <br>
                                            <h4>PENGUSUL</h4>
                                            <label for="nama_pengusul">Nama</label>
                                            <input type="text" class="form-control" id="nama_pengusul" name="nama_pengusul" value="{{$admin->nama}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="pekerjaan_pengusul">Jabatan</label>
                                            <input type="text" class="form-control" id="pekerjaan_pengusul" name="pekerjaan_pengusul" value="{{$admin->pekerjaan}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="lembaga_pengusul">Lembaga/Instansi</label>
                                            <input type="text" class="form-control" id="lembaga" name="lembaga_pengusul" value="{{$admin->lembaga}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_pengusul">Alamat</label>
                                            <input type="text" class="form-control" id="alamat_pengusul" name="alamat_pengusul" value="{{$admin->alamat}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="kabupaten_pengusul">Kabupaten/Kota</label>
                                                <select class="form-control" id="kabupaten_pengusul" name="kabupaten_pengusul" readonly>
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
                                            <label for="no_telp_pengusul">No Telepon/HP</label>
                                                <input type="text" class="form-control" id="no_telp_pengusul" name="no_telp_pengusul" value="{{$admin->no_telp}}" readonly>
                                        </div>
                                        <p>Dengan ini kami merekomendasikan/mengusulkan nama tersebut di bawah ini untuk mengikuti pendaftaran Lomba Krenova Provinsi Jawa Tengah Tahun 2018.</p>
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-perorangan-tab" data-toggle="tab" href="#nav-perorangan" role="tab" aria-controls="nav-perorangan" aria-selected="true">Perorangan</a>
                                                <a class="nav-item nav-link" id="nav-kelompok-tab" data-toggle="tab" href="#nav-kelompok" role="tab" aria-controls="nav-kelompok" aria-selected="false">Kelompok</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-perorangan" role="tabpanel" aria-labelledby="nav-perorangan-tab">
                                                <br>
                                                <h4>Peserta Perorangan</h4>
                                                <div class="form-group">
                                                    <label for="bidang_perorangan">Bidang</label>
                                                    <select class="form-control" id="bidang_perorangan" name="bidang_perorangan" readonly>
                                                        <option value=''>Pilih Kategori</option>
                                                        <option value="agribisnis dan pangan" {{$inventor->kategori=='agribisnis dan pangan'?'selected':''}}>Agribisnis dan pangan</option>
                                                        <option value="energi" {{$inventor->kategori=='energi'?'selected':''}}>Energi</option>
                                                        <option value="kehutanan dan lingkungan hidup" {{$inventor->kategori=='kehutanan dan lingkungan hidup'?'selected':''}}>Kehutanan dan lingkungan hidup</option>
                                                        <option value="kelautan dan perikanan" {{$inventor->kategori=='kelautan dan perikanan'?'selected':''}}>Kelautan dan perikanan</option>
                                                        <option value="kesehatan, obat-obatan dan kosmetika" {{$inventor->kategori=='kesehatan, obat-obatan dan kosmetika'?'selected':''}}>Kesehatan, obat-obatan dan kosmetika</option>
                                                        <option value="pendidikan" {{$inventor->kategori=='pendidikan'?'selected':''}}>Pendidikan</option>
                                                        <option value="rekayasa teknologi dan manufaktur" {{$inventor->kategori=='rekayasa teknologi dan manufaktur'?'selected':''}}>Rekayasa Teknologi dan manufaktur</option>
                                                        <option value="kerajinan dan industri rumah tangga" {{$inventor->kategori=='kerajinan dan industri rumah tangga'?'selected':''}}>Kerajinan dan industri rumah tangga</option>
                                                        <option value="sosial" {{$inventor->kategori=='sosial'?'selected':''}}>Sosial</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_perorangan">Alamat</label>
                                                    <input type="text" class="form-control" id="alamat_perorangan" name="alamat_perorangan" value="{{$inventor->alamat}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pekerjaan_perorangan">Pekerjaan</label>
                                                    <input type="text" class="form-control" id="pekerjaan_perorangan" name="pekerjaan_perorangan" value="{{isset($inventor->pekerjaan)?$inventor->pekerjaan:''}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_telp_perorangan">No Telepon/HP</label>
                                                    <input type="text" class="form-control" id="no_telp_perorangan" name="no_telp_perorangan" value="{{$inventor->no_telp}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_email_perorangan">Alamat E-mail</label>
                                                    <input type="e-mail" class="form-control" id="alamat_email_perorangan" name="alamat_email_perorangan" value="{{$inventor->email}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                        <label for="karya_usul_kelompok">Karya Yang Diusulkan</label>
                                                        <input type="text" class="form-control" id="karya_usul_perorangan" name="karya_usul_perorangan" value="{{isset($profil->judul)?$profil->judul:''}}" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="temuan_baru_kelompok">Temuan Baru</label>
                                                        <input type="text" class="form-control" id="temuan_baru_perorangan" name="temuan_baru_perorangan" value="{{isset($inventor->temuan)?$inventor->temuan:''}}" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pengembangan_dari_kelompok">Pengembangan dari</label>
                                                        <input type="text" class="form-control" id="pengembangan_dari_perorangan" name="pengembangan_dari_perorangan" value="{{isset($inventor->pengembangan)?$inventor->pengembangan:''}}" readonly>
                                                    </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-kelompok" role="tabpanel" aria-labelledby="nav-kelompok-tab">
                                                <br>
                                                <h4>Peserta Kelompok</h4>
                                                <div class="form-group">
                                                    <label for="bidang_kelompok">Bidang</label>
                                                    <select class="form-control" id="bidang_perorangan" name="bidang_kelompok" readonly>
                                                        <option value=''>Pilih Kategori</option>
                                                        <option value="agribisnis dan pangan" {{$inventor->kategori_kelompok=='agribisnis dan pangan'?'selected':''}}>Agribisnis dan pangan</option>
                                                        <option value="energi" {{$inventor->kategori_kelompok=='energi'?'selected':''}}>Energi</option>
                                                        <option value="kehutanan dan lingkungan hidup" {{$inventor->kategori_kelompok=='kehutanan dan lingkungan hidup'?'selected':''}}>Kehutanan dan lingkungan hidup</option>
                                                        <option value="kelautan dan perikanan" {{$inventor->kategori_kelompok=='kelautan dan perikanan'?'selected':''}}>Kelautan dan perikanan</option>
                                                        <option value="kesehatan, obat-obatan dan kosmetika" {{$inventor->kategori_kelompok=='kesehatan, obat-obatan dan kosmetika'?'selected':''}}>Kesehatan, obat-obatan dan kosmetika</option>
                                                        <option value="pendidikan" {{$inventor->kategori_kelompok=='pendidikan'?'selected':''}}>Pendidikan</option>
                                                        <option value="rekayasa teknologi dan manufaktur" {{$inventor->kategori_kelompok=='rekayasa teknologi dan manufaktur'?'selected':''}}>Rekayasa Teknologi dan manufaktur</option>
                                                        <option value="kerajinan dan industri rumah tangga" {{$inventor->kategori_kelompok=='kerajinan dan industri rumah tangga'?'selected':''}}>Kerajinan dan industri rumah tangga</option>
                                                        <option value="sosial" {{$inventor->kategori_kelompok=='sosial'?'selected':''}}>Sosial</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_kelompok">Nama Kelompok</label>
                                                    <input type="text" class="form-control" id="nama_kelompok" name="nama_kelompok" value="{{$inventor->nama_kelompok}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ketua_kelompok">Nama Ketua Kelompok</label>
                                                    <input type="text" class="form-control" id="ketua_kelompok" name="ketua_kelompok" value="{{$inventor->nama_ketua}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_kelompok">Alamat Kelompok</label>
                                                    <input type="text" class="form-control" id="alamat_kelompok" name="alamat_kelompok" value="{{isset($inventor->alamat_kelompok)?$inventor->alamat_kelompok:''}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_hp_kelompok">No Telepon/HP Ketua</label>
                                                    <input type="text" class="form-control" id="no_hp_kelompok" name="no_hp_kelompok" value="{{isset($inventor->no_telp_kelompok)?$inventor->no_telp_kelompok:''}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_email_kelompok">Alamat E-mail</label>
                                                    <input type="e-mail" class="form-control" id="alamat_email_kelompok" name="alamat_email_kelompok" value="{{isset($inventor->email_kelompok)?$inventor->email_kelompok:''}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_anggota_kelompok">Nama Anggota</label>
                                                    <input type="text" class="form-control" id="nama_anggota_kelompok" name="nama_anggota_kelompok" placeholder="Nama Anggota 1" value="{{isset($inventor->anggota_1)?$inventor->anggota_1:''}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="nama_anggota_kelompok_2" name="nama_anggota_kelompok_2" placeholder="Nama Anggota 2" value="{{isset($inventor->anggota_2)?$inventor->anggota_2:''}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="nama_anggota_kelompok_3" name="nama_anggota_kelompok_3" placeholder="Nama Anggota 3" value="{{isset($inventor->anggota_3)?$inventor->anggota_3:''}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="nama_anggota_kelompok_4" name="nama_anggota_kelompok_4" placeholder="Nama Anggota 4" value="{{isset($inventor->anggota_4)?$inventor->anggota_4:''}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="karya_usul_kelompok">Karya Yang Diusulkan</label>
                                                    <input type="text" class="form-control" id="karya_usul_kelompok" name="karya_usul_kelompok" value="{{isset($profil->judul)?$profil->judul:''}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="temuan_baru_kelompok">Temuan Baru</label>
                                                    <input type="text" class="form-control" id="temuan_baru_kelompok" name="temuan_baru_kelompok" value="{{isset($inventor->temuan)?$inventor->temuan:''}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pengembangan_dari_kelompok">Pengembangan dari</label>
                                                    <input type="text" class="form-control" id="pengembangan_dari_kelompok" name="pengembangan_dari_kelompok" value="{{isset($inventor->pengembangan)?$inventor->pengembangan:''}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-secondary" id="lanjutkan_pendaftaran">Lanjutkan</a> 
                                    {{--  </form>  --}}
                                </div>
                                <div class="tab-pane fade" id="kuesioner" role="tabpanel" aria-labelledby="kuesioner-tab">
                                    {{--  <form>  --}}
                                        <br>
                                        <p>A. ORISINALITAS DAN KEPIONIRAN</p>
                                        <div class="form-group">
                                            <label for="temuan_asli">- Apakah temuan ini merupakan hasil temuan asli? Jelaskan</label>
                                            <input type="text" class="form-control" id="temuan_asli" name="temuan_asli" value="{{isset($kuesinventor->temuan_asli)?$kuesinventor->temuan_asli:''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="waktu_produksi"> - Kapan temuan ini diproduksi (bulan, tahun)?</label>
                                            <input type="date" class="form-control" id="waktu_produksi" name="waktu_produksi" value="{{isset($kuesinventor->waktu_produksi)?$kuesinventor->waktu_produksi:''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="orisinalitas_alat"> - Apakah sudah ada alat sejenis yang sudah ada? Jelaskan</label>
                                            <input type="text" class="form-control" id="orisinalitas_alat" name="orisinalitas_alat" value="{{isset($kuesinventor->sudah_ada)?$kuesinventor->sudah_ada:''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="orisinalitas_ide">- Apakah temuan saudara/i merupakan hasil pengembangan ide orang lain? Jelaskan</label>
                                            <input type="text" class="form-control" id="orisinalitas_ide" name="orisinalitas_ide" value="{{isset($kuesinventor->ide_orang)?$kuesinventor->ide_orang:''}}" readonly>
                                        </div>
                                        <p>B. PENERAPAN <br>a. Implementasi </p>
                                        <div class="form-group">
                                            <label for="implementasi_komersil">- Apakah sudah dipersiapkan untuk komersial/dijual ? </label>
                                            <input type="text" class="form-control" id="implementasi_komersil" name="implementasi_komersil" value="{{isset($kuesinventor->komersial)?$kuesinventor->komersial:''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="implementasi_pihak">- Dimana, oleh siapa ?</label>
                                            <input type="text" class="form-control" id="implementasi_pihak" name="implementasi_pihak" value="{{isset($kuesinventor->komersial_pihak)?$kuesinventor->komersial_pihak:''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="implementasi_asal_usul">- Fasilitas dan Lomba apa saja yang pernah diterima/diikuti? Jelaskan </label>
                                            <input type="text" class="form-control" id="implementasi_asal_usul" name="implementasi_asal_usul" value="{{isset($kuesinventor->asal_usul)?$kuesinventor->asal_usul:''}}" readonly>
                                        </div>
                                        <p>b. Penerapan</p>	
                                        <div class="form-group">
                                            <label for="penerapan_temuan"> -  Apakah temuan saudara sudah diterapkan?</label>
                                            <input type="text" class="form-control" id="penerapan_temuan" name="penerapan_temuan" value="{{isset($kuesinventor->penarapan)?$kuesinventor->penarapan:''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="penerapan_pelaku">- Dimana/oleh siapa ?</label>
                                            <input type="text" class="form-control" id="penerapan_pelaku" name="penerapan_pelaku" value="{{isset($kuesinventor->pelaku_penerapan)?$kuesinventor->pelaku_penerapan:''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="penerapan_cakupan">- Cakupan/Skala Penerapan (Kab/Kota, Provinsi, Nasional)?</label>
                                            <input type="text" class="form-control" id="penerapan_cukupan" name="penerapan_cukupan" value="{{isset($kuesinventor->cakupan_penerapan)?$kuesinventor->cakupan_penerapan:''}}" readonly>
                                        </div>
                                        <p>C. MANFAAT<br>a. Penyerahan Bahan Baku Lokal</p>
                                        <div class="form-group">
                                            <label for="bahan_baku_lokal">- Berapa persen penggunaan bahan baku lokal ? </label>
                                            <input type="text" class="form-control" id="manfaat_bahan_baku_lokal" name="bahan_baku_lokal" placeholder="Jelakan nilai, volume, waktu, tenaga, dsb" value="{{isset($kuesinventor->bahan_lokal)?$kuesinventor->bahan_lokal:''}}" readonly>
                                        </div>
                                        <p> b. Peningkatan proses/kapasitas/produktivitas ?</p>
                                        <div class="form-group">
                                            <label for="manfaat_produktifitas">- Seberapa besar produktivitas yang dihasilkan ?</label>
                                            <input type="text" class="form-control" id="manfaat_produktifitas" name="manfaat_produktifitas" value="{{isset($kuesinventor->kapasitas_produksi)?$kuesinventor->kapasitas_produksi:''}}" readonly>
                                        </div>
                                        <p>c. Penyerapan Tenaga Kerja</p>
                                        <div class="form-group">
                                            <label for="manfaat_lapangan_kerja">- Berapa banyak tenaga kerja yang diserap dalam penciptaan/penerapan produk (lapangan kerja) ?</label>
                                            <input type="text" class="form-control" id="manfaat_lapangan_kerja" name="manfaat_lapangan_kerja" value="{{isset($kuesinventor->tenaga_kerja)?$kuesinventor->tenaga_kerja:''}}" readonly>
                                        </div>
                                        <p>D. KEBERLANGSUNGAN/KOMERSIALISASI<br>
                                            a. Prospek Bisnis / Komersial
                                        </p>
                                        <div class="form-group">
                                            <label for="komersil_dimana">- Oleh siapa dan dimana?</label>
                                            <input type="text" class="form-control" id="komersil_dimana" name="komersil_dimana" value="{{isset($kuesinventor->prospek_tempat)?$kuesinventor->prospek_tempat:''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="komersil_cara"> - Bagaimana Caranya ?</label>
                                            <input type="text" class="form-control" id="komersil_cara" name="komersil_cara" value="{{isset($kuesinventor->prospek_cara)?$kuesinventor->prospek_cara:''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="komersil_biaya"> - Perhitungan Biaya Produksi</label>
                                            <input type="text" class="form-control" id="komersil_biaya" name="komersil_biaya" value="{{isset($kuesinventor->biaya_produksi)?$kuesinventor->biaya_produksi:''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="komersil_omset">- Berapa Omset Penjualan ?</label>
                                            <input type="text" class="form-control" id="komersil_omset" name="komersil_omset" value="{{isset($kuesinventor->omset)?$kuesinventor->omset:''}}" readonly>
                                        </div>
                                        <p>b. Ketersediaan Bahan Baku</p>
                                        <div class="form-group">
                                            <label for="komersil_bahan_baku">- Dimana bahan baku pembuatan temuan ini bisa saudara/i diperoleh (diakses)?, jelaskan </label>
                                            <input type="text" class="form-control" id="komersil_bahan_baku" name="komersil_bahan_baku" value="{{isset($kuesinventor->asal_bahan)?$kuesinventor->asal_bahan:''}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="komersil_banyak">- Banyak tidaknya ketersediaan bahan baku untuk produksi temuan/inovasi?, jelaskan </label>
                                            <input type="text" class="form-control" id="komersil_banyak" name="komersil_banyak" value="{{isset($kuesinventor->quantity_bahan)?$kuesinventor->quantity_bahan:''}}" readonly>
                                        </div>
                                        <p>c. Berorientasi Kebutuhan Masa Depan</p>
                                        <div class="form-group">
                                            <label for="komersil_kebutuhan">- Menjawab kebutuhan teknologi bagi masyarakat (saat ini & ke depan), jelaskan </label>
                                            <input type="text" class="form-control" id="komersil_kebutuhan" name="komersil_kebutuhan" value="{{isset($kuesinventor->orientasi)?$kuesinventor->orientasi:''}}" readonly>
                                        </div>
                                        <a href="#" id="lanjutkan_kuesioner" class="btn btn-secondary">Lanjutkan</a> 
                                    {{--  </form>  --}}
                                </div>
                                <div class="tab-pane fade" id="proposal" role="tabpanel" aria-labelledby="proposal-tab">
    
                                    {{--  <form>  --}}
                                        <div class="form-group">
                                            <label for="proposal_judul">Judul</label>
                                            <input type="text" class="form-control" id="proposal_judul" name="proposal_judul" value="{{$profil->judul}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="proposal_abstrak">Abstrak / Ringkasan Eksekutif</label>
                                                <textarea class="form-control" id="proposal_abstrak" name="proposal_abstrak" rows="3" placeholder="Tuliskan Abstrak maksimal 500 kata" readonly>{{isset($proposal->abstrak)?$proposal->abstrak:''}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="proposal_latar_belakang">Latar Belakang</label>
                                                <textarea class="form-control" id="proposal_latar_belakang" name="proposal_latar_belakang" rows="3" readonly>{{isset($proposal->latar_belakang)?$proposal->latar_belakang:''}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="proposal_maksud_tujuan">Maksud dan Tujuan</label>
                                                <textarea class="form-control" id="proposal_maksud_tujuan" name="proposal_maksud_tujuan" rows="3" readonly>{{isset($proposal->maksud)?$proposal->maksud:''}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="proposal_manfaat">Manfaat</label>
                                            <textarea class="form-control" id="proposal_manfaat" name="proposal_manfaat" rows="3" readonly>{{isset($proposal->manfaat)?$proposal->manfaat:''}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="proposal_spesifikasi">Spesifikasi Teknis</label>
                                            <textarea class="form-control" id="proposal_spesifikasi" name="proposal_spesifikasi" rows="3" readonly>{{isset($proposal->spek_teknik)?$proposal->spek_teknik:''}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="proposal_keunggulan">Keunggulan dan Perbedaan bila dibandingkan  dengan penemuan sejenis sebelumnya </label>
                                            <textarea class="form-control" id="proposal_keunggulan" name="proposal_keunggulan" rows="3" readonly>{{isset($proposal->keunggulan)?$proposal->keunggulan:''}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="proposal_penerapan">Penerapan pada Masyarakat dan Dunia Industri</label>
                                            <textarea class="form-control" id="proposal_penerapan" name="proposal_penerapan" rows="3" readonly>{{isset($proposal->penerapan)?$proposal->penerapan:''}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="proposal_perhitungan">Perhitungan Biaya Produksi Temuan/Inovasi</label>
                                            <textarea class="form-control" id="proposal_perhitungan" name="proposal_perhitungan" rows="3" readonly>{{isset($proposal->biaya_produksi)?$proposal->biaya_produksi:''}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="proposal_prospek">Prospek Bisnis / Komersialisasi</label>
                                            <textarea class="form-control" id="proposal_prospek" name="proposal_prospek" rows="3" readonly>{{isset($proposal->prospek_bisnis)?$proposal->prospek_bisnis:''}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="proposal_file_1">Foto Produk <br/>
                                              @if($proposal->foto1_name!='')<label><a href="{{url('file/'.$proposal->foto1_name)}}" target="_blank">Foto Produk 1</a></label><br/>@endif
                                              @if($proposal->foto2_name!='')<label><a href="{{url('file/'.$proposal->foto2_name)}}" target="_blank">Foto Produk 2</a></label><br/>@endif
                                              @if($proposal->foto3_name!='')<label><a href="{{url('file/'.$proposal->foto3_name)}}" target="_blank">Foto Produk 3</a></label><br/>@endif
                                              @if($proposal->foto4_name!='')<label><a href="{{url('file/'.$proposal->foto4_name)}}" target="_blank">Foto Produk 4</a></label><br/>@endif
                                              @if($proposal->suratpengantar_name!='')<label><a href="{{url('file/'.$proposal->suratpengantar_name)}}" target="_blank">Surat Pernyataan Keaslian</a></label><br/>@endif
                                              @if($proposal->lampiran1_name!='')<label><a href="{{url('file/'.$proposal->lampiran1_name)}}" target="_blank">Data pendukung 1</a></label><br/>@endif
                                              @if($proposal->lampiran2_name!='')<label><a href="{{url('file/'.$proposal->lampiran2_name)}}" target="_blank">Data pendukung 2</a></label><br/>@endif                                                
                                              @if($proposal->lampiran3_name!='')<label><a href="{{url('file/'.$proposal->lampiran3_name)}}" target="_blank">Data pendukung 3</a></label><br/>@endif
                                              @if($proposal->lampiran4_name!='')<label><a href="{{url('file/'.$proposal->lampiran1_name)}}" target="_blank">Data pendukung 4</a></label><br/>@endif
                                              @if($proposal->lampiran5_name!='')<label><a href="{{url('file/'.$proposal->lampiran5_name)}}" target="_blank">Data pendukung 5</a></label>@endif
                                              @if($proposal->riwayathidup_name!='')<label><a href="{{url('file/'.$proposal->riwayathidup_name)}}" target="_blank">Daftar Riwaya Hidup</a></label><br/>@endif
                                              @if($proposal->ktp_name!='')<label><a href="{{url('file/'.$proposal->ktp_name)}}" target="_blank">Foto KTP</a></label><br/>@endif
                                        </div>
                                        <a href="{{url('inventor/cetakproposal/'.$profil->id)}}" class="btn btn-success">Cetak</a> 
                                    {{--  </form>  --}}
                                </div>     
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
