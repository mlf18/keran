@extends('content.template.app')
@include('content.template.slider')
@section('content')
<section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          
      <div class="col-lg-12 order-lg-1">
            <div class="p-5"><center>
              <h2 class="display-4"> Daftar Pemenang</h2>
          
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
                      <th scope="col">Pemenang Krenova</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $i=1;?>
                      @foreach($daftars as $daftar)
                    <tr>
                      <th scope="row">{{$i++}}</th>
                      <td><a href="{{url('file/'.$daftar->nama_file)}}">{{$daftar->nama}}</a></td>
                    </tr>
                    @endforeach
                    
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
  @endsection