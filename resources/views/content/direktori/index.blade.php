@extends('content.template.app')
@include('content.template.slider')
@section('content')
<div class="container">

        <div class="row">
  
          <!-- Post Content Column -->
          <div class="col-lg-12">
  
            <!-- Title -->
            <h1 class="mt-4">Direktori Inovasi</h1>
  
            <!-- Author -->
            
  
            <hr>
            <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                  <form method="POST" action="{{url('direktori/cari')}}">
                    {{ csrf_field()}}
                  <select class="form-control" id="kabupaten">
                      <option value="">Jawa Tengah</option>
                      <option value="banjarnegara">Kabupaten Banjarnegara</option>
                      <option value="banyumas">Kabupaten Banyumas</option>
                      <option value="batang">Kabupaten Batang</option>
                      <option value="blora">Kabupaten Blora</option>
                      <option value="boyolali">Kabupaten Boyolali</option>
                      <option value="brebes">Kabupaten Brebes</option>
                      <option value="cilacap">Kabupaten Cilacap</option>
                      <option value="demak">Kabupaten Demak</option>
                      <option value="grobogan">Kabupaten Grobogan</option>
                      
                      <option value="jepara">Kabupaten Jepara</option>
                      <option value="karanganyar">Kabupaten Karanganyar</option>
                      <option value="kebumen">Kabupaten Kebumen</option>
                      <option value="kendal">Kabupaten Kendal</option>
                      <option value="klaten">Kabupaten Klaten</option>
                      <option value="kudus">Kabupaten Kudus</option>
                      <option value="magelang">Kabupaten Magelang</option>
                      <option value="pati">Kabupaten Pati</option>
                      <option value="pekalongan">Kabupaten Pekalongan</option>
                      
                      <option value="pemalang">Kabupaten Pemalang</option>
                      <option value="purbalingga">Kabupaten Purbalingga</option>
                      <option value="purworejo">Kabupaten Purworejo</option>
                      <option value="rembang">Kabupaten Rembang</option>
                      <option value="semarang">Kabupaten Semarang</option>
                      <option value="sragen">Kabupaten Sragen</option>
                      <option value="sukoharjo">Kabupaten Sukoharjo</option>
                      <option value="tegal">Kabupaten Tegal</option>
                      <option value="temanggung">Kabupaten Temanggung</option>
                      
                      <option value="wonogiri">Kabupaten Wonogiri</option>
                      <option value="wonosobo">Kabupaten Wonosobo</option>
                      <option value="kota magelang">Kota Magelang</option>
                      <option value="kota pekalongan">Kota Pekalongan</option>
                      <option value="kota salatiga">Kota Salatiga</option>
                      <option value="kota semarang">Kota Semarang</option>
                      <option value="kota surakarta">Kota Surakarta</option>
                      <option value="kota tegal">Kota Tegal</option>
                  </select>
                  </div>
                  </div>
                  <div class="col-md-3">
                      <select class="form-control" id="bidang">
                          <option value=''>Semua</option>
                          <option value='agribisnis dan pangan'>Agribisnis dan Pangan</option>
                          <option value="energi">Energi</option>
                          <option value="kehutanan dan lingkungan hidup">Kehutanan dan Lingkungan Hidup</option>
                          <option value="kelautan dan perikanan">Kelautan dan Perikanan</option>
                          <option value="kesehatan, obat-obatan dan kosmetika">Kesehatan, Obat-obatan dan Kosmetika</option>
                          <option value="pendidikan">Pendidikan</option>
                          <option value="">Rekayasa Teknologi dan Manufaktur</option>
                          <option value="rekayasa teknologi dan manufaktur">Kerajinan dan Industri Rumah Tangga</option>
                          <option value="sosial">Sosial</option>
                      </select>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Cari</button> 
                    </div>
                  </div>
                </form>
              </div>
              <div id="map"></div>
              <script>
                var markers=[];
                function initMap() {
                  
                  map = new google.maps.Map(document.getElementById('map'), {
                  center: {
                    lat: -7.035474,
                    lng: 110.205112
                  },
                  zoom: 9
                });
                  var loc= <?php echo json_encode($locationsPeta);?>;
                  // var icons= "<?php echo url('front_end/img/1.png')?>";
                  infowindow = new google.maps.InfoWindow();
                  var contentString=[];
                  for (i=0;i<loc.length;i++){
                    var kat;
                    if (loc[i]["kategori_kelompok"]==''){
                      kat=loc[i]["kategori"];
                    }else{
                      kat=loc[i]["kategori_kelompok"];
                    }
                    var icons = {
                      'agribisnis dan pangan': <?php echo json_encode(url('front_end/img/icon/dua/3.png'))?>,
                      'kelautan dan perikanan':<?php echo json_encode(url('front_end/img/icon/dua/2.png'))?>,
                      'rekayasa teknologi dan manufaktur':<?php echo json_encode(url('front_end/img/icon/dua/1.png'))?>,
                      'energi':<?php echo json_encode(url('front_end/img/icon/dua/6.png'))?>,
                      'kesehatan, obat-obatan dan kosmetika':<?php echo json_encode(url('front_end/img/icon/dua/5.png'))?>,
                      'kerajinan dan industri rumah tangga':<?php echo json_encode(url('front_end/img/icon/dua/4.png'))?>,
                      'kehutanan dan lingkungan hidup':<?php echo json_encode(url('front_end/img/icon/dua/7.png'))?>,
                      'pendidikan':<?php echo json_encode(url('front_end/img/icon/dua/8.png'))?>,
                      'sosial':<?php echo json_encode(url('front_end/img/icon/dua/9.png'))?>
                    };
                    console.log(icons[kat]);
                    var image = {
                                url: icons[kat],
                                size: new google.maps.Size(71, 71),
                                origin: new google.maps.Point(0, 0),
                                anchor: new google.maps.Point(17, 34),
                                scaledSize: new google.maps.Size(45, 45)
                              };
                    contentString[i] = "<h4>"+loc[i]["judul"]+"</h4>"+
                                        loc[i]["abstrak"].slice(0,100)+"........<br/>"+
                                        "<a href='#'>Selengkapnya</a>";
                    var latitude=parseFloat(loc[i]['latitude']);
                    var longitude=parseFloat(loc[i]['longitude']);
                    var marker = new google.maps.Marker({
                                    position: {
                                    lat: latitude,
                                    lng: longitude
                                  },
                                    icon:image,
                                    map: map
                                });
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                      return function() {
                        infowindow.setContent(contentString[i]);
                        infowindow.setOptions({maxWidth: 500});
                        infowindow.open(map, marker);
                      }
                    }) (marker, i));
                  }
                }
              </script>
              <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsjfPj1YJACxgd_rcvuWiTO69c9SO1Dbk&callback=initMap">
              </script>
            
  
            
            <hr>
  
            <!-- Blog Post -->
            
            
            
  
            <!-- Single Comment -->
         
  
            <!-- Comment with nested comments -->
            
  
          </div>
  
          
  
        </div>
        <!-- /.row -->
  
      </div>
  @endsection