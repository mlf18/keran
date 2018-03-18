    <div class="tab-pane fade show active" id="pendaftaran" role="tabpanel" aria-labelledby="pendaftaran-tab">
            {{--  <form method="POST" action="{{url('/proposals')}}">
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
                            <select class="form-control" id="bidang_perorangan" name="bidang_perorangan">
                                <option value="agribisnis dan pangan">Agribisnis dan pangan</option>
                                <option value="energi">Energi</option>
                                <option value="kehutanan dan lingkungan hidup">Kehutanan dan lingkungan hidup</option>
                                <option value="kelautan dan perikanan">Kelautan dan perikanan</option>
                                <option value="kesehatan, obat-obatan dan kosmetika">Kesehatan, obat-obatan dan kosmetika</option>
                                <option value="pendidikan">Pendidikan</option>
                                <option value="rekayasa teknologi dan manufaktur">Rekayasa Teknologi dan manufaktur</option>
                                <option value="kerajinan dan industri rumah tangga">Kerajinan dan industri rumah tangga</option>
                                <option value="sosial">Sosial</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat_perorangan">Alamat</label>
                            <input type="text" class="form-control" id="alamat_perorangan" name="alamat_perorangan" value="{{$profil->alamat}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_perorangan">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan_perorangan" name="pekerjaan_perorangan" value="{{isset($inventor->pekerjaan)?$inventor->pekerjaan:''}}">
                        </div>
                        <div class="form-group">
                            <label for="no_telp_perorangan">No Telepon/HP</label>
                            <input type="text" class="form-control" id="no_telp_perorangan" name="no_telp_perorangan" value="{{$profil->no_telp}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat_email_perorangan">Alamat E-mail</label>
                            <input type="e-mail" class="form-control" id="alamat_email_perorangan" name="alamat_email_perorangan" value="{{$profil->email}}" readonly>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-kelompok" role="tabpanel" aria-labelledby="nav-kelompok-tab">
                        <br>
                        <h4>Peserta Kelompok</h4>
                        <div class="form-group">
                            <label for="bidang_kelompok">Bidang</label>
                            <select class="form-control" id="bidang_kelompok" name="bidang_kelompok">
                                <option value="agribisnis dan pangan">Agribisnis dan pangan</option>
                                <option value="energi">Energi</option>
                                <option value="kehutanan dan lingkungan hidup">Kehutanan dan lingkungan hidup</option>
                                <option value="kelautan dan perikanan">Kelautan dan perikanan</option>
                                <option value="kesehatan, obat-obatan dan kosmetika">Kesehatan, obat-obatan dan kosmetika</option>
                                <option value="pendidikan">Pendidikan</option>
                                <option value="rekayasa teknologi dan manufaktur">Rekayasa Teknologi dan manufaktur</option>
                                <option value="kerajinan dan industri rumah tangga">Kerajinan dan industri rumah tangga</option>
                                <option value="sosial">Sosial</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_kelompok">Nama Kelompok</label>
                            <input type="text" class="form-control" id="nama_kelompok" name="nama_kelompok" value="">
                        </div>
                        <div class="form-group">
                            <label for="ketua_kelompok">Nama Ketua Kelompok</label>
                            <input type="text" class="form-control" id="ketua_kelompok" name="ketua_kelompok" value="">
                        </div>
                        <div class="form-group">
                            <label for="alamat_kelompok">Alamat Kelompok</label>
                            <input type="text" class="form-control" id="alamat_kelompok" name="alamat_kelompok" value="{{isset($inventor->alamat_kelompok)?$inventor->alamat_kelompok:''}}">
                        </div>
                        <div class="form-group">
                            <label for="no_hp_kelompok">No Telepon/HP Ketua</label>
                            <input type="text" class="form-control" id="no_hp_kelompok" name="no_hp_kelompok" value="{{isset($inventor->no_telp_kelompok)?$inventor->no_telp_kelompok:''}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat_email_kelompok">Alamat E-mail</label>
                            <input type="e-mail" class="form-control" id="alamat_email_kelompok" name="alamat_email_kelompok" value="{{isset($inventor->email_kelompok)?$inventor->email_kelompok:''}}">
                        </div>
                        <div class="form-group">
                            <label for="nama_anggota_kelompok">Nama Anggota</label>
                            <input type="text" class="form-control" id="nama_anggota_kelompok" name="nama_anggota_kelompok" placeholder="Nama Anggota 1" value="{{isset($inventor->anggota_1)?$inventor->anggota_1:''}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_anggota_kelompok_2" name="nama_anggota_kelompok_2" placeholder="Nama Anggota 2" value="{{isset($inventor->anggota_2)?$inventor->anggota_2:''}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_anggota_kelompok_3" name="nama_anggota_kelompok_3" placeholder="Nama Anggota 3" value="{{isset($inventor->anggota_3)?$inventor->anggota_3:''}}">
                        </div>
                        <div class="form-group">
                        <div class="form-group">
                            <label for="karya_usul_kelompok">Karya Yang Diusulkan</label>
                            <input type="text" class="form-control" id="karya_usul_kelompok" name="karya_usul_kelompok" value="{{isset($inventor->temuan)?$inventor->temuan:''}}">
                        </div>
                        <div class="form-group">
                            <label for="temuan_baru_kelompok">Temuan Baru</label>
                            <input type="text" class="form-control" id="temuan_baru_kelompok" name="temuan_baru_kelompok" value="{{isset($inventor->judul)?$inventor->judul:''}}">
                        </div>
                        <div class="form-group">
                            <label for="pengembangan_dari_kelompok">Pengembangan dari</label>
                            <input type="text" class="form-control" id="pengembangan_dari_kelompok" name="pengembangan_dari_kelompok" value="{{isset($inventor->pengembangan)?$inventor->pengembangan:''}}">
                        </div>
                    </div>
                </div>
                <button type="submit" value="draft" name="submit" class="btn btn-primary">Simpan Daft</button> <a href="#" class="btn btn-secondary" id="lanjutkan_pendaftaran">Lanjutkan</a> 
            {{--  </form>  --}}
        </div>