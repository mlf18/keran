<div class="tab-pane fade" id="proposal" role="tabpanel" aria-labelledby="proposal-tab">
    
        {{--  <form>  --}}
            <div class="form-group">
                <label for="proposal_judul">Judul</label>
                <input type="text" class="form-control" id="proposal_judul" name="proposal_judul" value="{{$profil->judul}}" disabled>
            </div>
            <div class="form-group">
                <label for="proposal_abstrak">Abstrak / Ringkasan Eksekutif</label>
                    <textarea class="form-control" id="proposal_abstrak" name="proposal_abstrak" rows="3" placeholder="Tuliskan Abstrak maksimal 500 kata"></textarea>
            </div>
            <div class="form-group">
                <label for="proposal_latar_belakang">Latar Belakang</label>
                    <textarea class="form-control" id="proposal_latar_belakang" name="proposal_latar_belakang" rows="3" ></textarea>
            </div>
            <div class="form-group">
                <label for="proposal_maksud_tujuan">Maksud dan Tujuan</label>
                    <textarea class="form-control" id="proposal_maksud_tujuan" name="proposal_maksud_tujuan" rows="3" ></textarea>
            </div>
            <div class="form-group">
                <label for="proposal_manfaat">Manfaat</label>
                <textarea class="form-control" id="proposal_manfaat" name="proposal_manfaat" rows="3" ></textarea>
            </div>
            <div class="form-group">
                <label for="proposal_spesifikasi">Spesifikasi Teknis</label>
                <textarea class="form-control" id="proposal_spesifikasi" name="proposal_spesifikasi" rows="3" ></textarea>
            </div>
            <div class="form-group">
                <label for="proposal_keunggulan">Keunggulan dan Perbedaan bila dibandingkan  dengan penemuan sejenis sebelumnya </label>
                <textarea class="form-control" id="proposal_keunggulan" name="proposal_keunggulan" rows="3" ></textarea>
            </div>
            <div class="form-group">
                <label for="proposal_penerapan">Penerapan pada Masyarakat dan Dunia Industri</label>
                <textarea class="form-control" id="proposal_penerapan" name="proposal_penerapan" rows="3" ></textarea>
            </div>
            <div class="form-group">
                <label for="proposal_perhitungan">Perhitungan Biaya Produksi Temuan/Inovasi</label>
                <textarea class="form-control" id="proposal_perhitungan" name="proposal_perhitungan" rows="3" ></textarea>
            </div>
            <div class="form-group">
                <label for="proposal_prospek">Prospek Bisnis / Komersialisasi</label>
                <textarea class="form-control" id="proposal_prospek" name="proposal_prospek" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="proposal_file_1">Foto Produk (Maksimal size 1 mb) <br><small>File pdf/jpg</small></label>
                <input type="file" class="form-control-file" id="proposal_file_1" name="proposal_file_1">
            </div>
            <div class="form-group">
                <label for="proposal_file_2"></label>
                <input type="file" class="form-control-file" id="proposal_file_2" name="proposal_file_2">
            </div>
            <div class="form-group">
                <label for="proposal_file_3"></label>
                <input type="file" class="form-control-file" id="proposal_file_3" name="proposal_file_3">
            </div>
            <div class="form-group">
                <label for="proposal_file_4"></label>
                <input type="file" class="form-control-file" id="proposal_file_4" name="proposal_file_4">
            </div>
            <div class="form-group">
                <label for="proposal_surat">Surat Pernyataan Keaslian Temuan (Maksimal size 1 mb) <br><small>File pdf/jpg</small></label>
                <input type="file" class="form-control-file" id="proposal_surat" name="proposal_surat">
            </div>
            <div class="form-group">
                <label for="proposal_pendukung">Data Dukung Kelengkapan Proposal atau Profil Temuan/Inovasi <small>(Contoh : Uji Lab, Sertifikasi, Legalitas Usaha, Berita media cetak/elektronik dan lain-lain)</small><br><small>File pdf, maksimal 10 mb</small></label>
                <input type="file" class="form-control-file" id="proposal_pendukung" name="proposal_pendukung">
            </div>
            <div class="form-group">
                {{--  <label for="no_hp"></label>  --}}
                <input type="file" class="form-control-file" id="proposal_daftar_riwayat" name="proposal_daftar_riwayat_1">
            </div>
            <div class="form-group">
                {{--  <label for="no_hp"></label>  --}}
                <input type="file" class="form-control-file" id="proposal_daftar_riwayat_2" name="proposal_daftar_riwayat_2">
            </div>
            <div class="form-group">
                <label for="no_hp"></label>
                <input type="file" class="form-control-file" id="proposal_daftar_riwayat_3" name="proposal_daftar_riwayat_3">
            </div>
            <div class="form-group">
                <label for="no_hp"></label>
                <input type="file" class="form-control-file" id="proposal_daftar_riwayat_4" name="proposal_daftar_riwayat_4">
            </div>
            <div class="form-group">
                <label for="proposal_daftar_riwayat_hidup">Daftar Riwayat Hidup (Maksimal size 1 mb) <br><small>File pdf/jpg</small> </label>
                <input type="file" class="form-control-file" id="proposal_daftar_riwayat_hidup" name="proposal_daftar_riwayat_hidup">
            </div>
            <div class="form-group">
                <label for="proposal_foto_ktp">Foto KTP/Kartu Pelajar (Maksimal size 1 mb) <br><small>File pdf/jpg</small> </label>
                <input type="file" class="form-control-file" id="proposal_foto_ktp" name="proposal_foto_ktp">
            </div>
            <button type="submit" value="draft" name="submit" class="btn btn-primary">Simpan Draft</button> <button type="submit" class="btn btn-success">Kirim</button> 
        {{--  </form>  --}}
    </div>