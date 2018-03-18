@extends('content.template.app')
@include('content.template.slider')
@section('content')
<section id="about-preview">
    <div class="container">
      <div class="row align-items-center">
        
        <div class="col-lg-12 order-lg-1">
          <div class="p-5"><center>
            <h2 >TENTANG KRENOVA</h2>
            <p>
              Penghargaan KRENOVA adalah bentuk apresiasi dari Gubernur Jawa Tengah kepada para mitra dan inovator yang secara nyata mendukung dalam memajukan produk inovasi untuk masyarakat luas.
            </p>
            <a href="{{url('/tentang')}}" class="btn btn-primary mt-3">Selengkapnya</a>
              </center>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-user m-auto text-primary"></i>
            </div>
            <a href="{{url('/pendaftaran')}}" class="btn btn-primary"><h4>PENDAFTARAN KRENOVA 2018</h4></a>
            </div>
        </div>      
        <div class="col-lg-6">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <a href="{{url('polling')}}" class="btn btn-primary"><h4>POLLING KRENOVA </h4></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="testimonials text-center ">
    <div class="container">
      <h2 class="mb-5">KATEGORI INOVASI</h2>
      <div class="row">
        <div class="col-lg-4">
          <a href="{{url('polling/kat/agribisnis dan pangan')}}" style="color:black;">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{url('front_end/img/1.png')}}" alt="">
            <h5>Agribisnis dan Pangan</h5>            
          </div>
        </a>
        </div>
        <div class="col-lg-4">
          <a href="{{url('polling/kat/kelautan dan perikanan')}}" style="color:black;">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{url('front_end/img/3.png')}}" alt="">
            <h5>Kelautan dan Perikanan</h5>
          </div>
        </a>
        </div>
        <div class="col-lg-4">
          <a href="{{url('polling/kat/rekayasa dan teknologi')}}" style="color:black;">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{url('front_end/img/2.png')}}" alt="">
            <h5>Rekayasa Teknologi dan Manufaktur</h5>
          </div>
        </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <a href="{{url('polling/kat/energi')}}" style="color:black;">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{url('front_end/img/009-green-energy.png')}}" alt="">
            <h5>Energi</h5>
          </div>
        </a>
        </div>
        <div class="col-lg-4">
          <a href="{{url('polling kesehatan, obat-obatan, dan kosmetika')}}" style="color:black;">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{url('front_end/img/005-heart.png')}}" alt="">
            <h5>Kesehatan, Obat-obatan, dan Kosmetika</h5>
          </div>
        </a>
        </div>
        <div class="col-lg-4">
          <a href="{{url('polling/kat/kerajinan dan industri rumah tangga')}}" style="color:black;">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{url('front_end/img/4.png')}}" alt="">
            <h5>Kerajinan dan Industri Rumah Tangga</h5>
          </div>
        </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <a href="{{url('polling/kat/kehutanan dan lingkungan hidup')}}" style="color:black;">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{url('front_end/img/5.png')}}" alt="">
            <h5>Kehutanan dan Lingkungan Hidup</h5>
          </div>
        </a>
        </div>
        <div class="col-lg-4">
          <a href="{{url('polling/kat/pendidikan')}}" style="color:black;">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{url('front_end/img/004-mortarboard.png')}}" alt="">
            <h5>Pendidikan</h5>        
          </div>
        </a>
        </div>
        <div class="col-lg-4">
          <a href="{{url('polling/kat/sosial')}}" style="color:black;">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{url('front_end/img/6.png')}}" alt="">
            <h5>Sosial</h5>
          </div>
        </a>
        </div>
      </div>
    </div>
    
  </section>
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-12 order-lg-1">
          <div class="p-5"><center>
            <h2 class="display-4"> <i class="icon-event  m-auto"></i> JADWAL KEGIATAN</h2>
                  
            <div class="container">
              <div class="page-header">
                  <br><br>
              </div>
              
                  <div class="row align-items-center">
                      <div class="col-lg-1">
                      </div>
                      <div class="col-lg-10">
                          <div class="card" >
                              <div class="card-body">
                                  <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kegiatan</th>
                                        <th scope="col">Tanggal</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>Penyerahan dokumen pengusulan administratif profil KRENOVA oleh Kab/Kota</td>
                                        <td>Februari - Maret 2018</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>Kompilasi dan seleksi administrasi  terhadap proposal KRENOVA</td>
                                        <td>Maret 2018</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">3</th>
                                        <td>Seleksi dan Verifikasi oleh tim penilai KRENOVA Provinsi Jawa Tengah</td>
                                        
                                        <td>April - Mei 2018</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">4.</th>
                                        <td>Evaluasi dan penilaian pemenang KRENOVA oleh tim penilai Provinsi Jawa Tengah</td>
                                        <td>Mei 2018</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">5. </th>
                                        <td>Penentuan Pemenang KRENOVA</td>
                                        <td>Juni 2018</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">6. </th>
                                        <td>Pemberitahuan kepada Pemenang KRENOVA</td>
                                        <td>Juni 2018</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">7.</th>
                                        <td>Pemberian penghargaan oleh Gubernur</td>
                                        <td>September 2018</td>
                                      </tr>
                                    </tbody>
                                  </table>

                              </div>
                          </div>
                      </div>	
                      <div class="col-lg-1">
                      </div>
                  </div>
              </center>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid" src="{{url('front_end/img/002-trophy.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">PENGHARGAAN KRENOVA TAHUN 2018</h2>
            <p><center><b>10 PEMENANG UTAMA</b><br>
              Piagam Penghargaan dan uang pembinaan dari Gubernur Jawa Tengah
              </center></p>
              <p><center><b>10 PEMENANG HARAPAN</b><br>
              Piagam Penghargaan dan uang pembinaan dari Gubernur Jawa Tengah
              </center></p>
              <p><center><b>10 PEMENANG FAVORIT</b><br>
              Piagam Penghargaan dan uang pembinaan dari Gubernur Jawa Tengah
              </center></p> 
              <p><center><b>PENGHARGAAN BUPATI/WALIKOTA PELOPOR INOVASI DAERAH</b><br>
              </center></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection