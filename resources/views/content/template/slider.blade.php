<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php $i=-1;?>
        @foreach($slider as $s)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$i++}}" class="{{$i==0?'active':''}}"></li>
        @endforeach
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php $i=0;?>
        @foreach($slider as $s)
        <div class="carousel-item {{$i==0?'active':''}}" style="background-image: url({{url('suratpengantarkota/'.$s->nama_slider)}})">
          <div class="carousel-caption d-none d-md-block">
            <h1>Selamat Datang </h1>
          </div>
        </div>
        <?php $i++;?>
        @endforeach
        
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>