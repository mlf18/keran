 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
            <li class="breadcrumb-item active">Surat Pengantar</li>
            <li class="breadcrumb-item active">Form </li>
      </ol>
            
            

            
            
            <div class="form-group">
                  {!! Form::label('nama_surat', 'Pilih Surat Pengantar') !!}
                  {!! Form::file('nama_surat', ['class' => 'form-control']); !!}
            </div>
            


            
            <div class="form-group" align="right">
                  {!! Form::submit($submitButton, ['class' => 'btn btn-secondary']) !!}                     
            </div>
      </div>
</div>