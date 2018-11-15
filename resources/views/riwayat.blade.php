@extends('layouts.admin')
@section('content')
</head>
<body>
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Biodata</h3>
                </div>
                    <div class="box-body">
                    <table class="table table-Warning table-striped table-hover">
                    <tr>
                        <td colspan="5"><button type="button" class="btn btn-primary btn-md"  data-toggle="modal" data-target="#tambih" >Tambah</button></td>
                    </tr>
                    <tr>
                        <td> Foto </td>
                        <td> Nama </td>
                        <td> Tempat  </td>
                        <td> Tanggal lahir </td>
                        <td> Hoby </td>
                        <td> File </td>
                        <td> Aksi </td>
                    </tr>
                    @foreach($biong as $value)
                    <tr>
                        <td><img src="{{asset('/img/'.$value->foto)}}" width="30px" height="30px"></td>
                        <td> {{$value->nama}} </td>
                        <td> {{$value->tempat}} </td>
                        <td> {{$value->tanggal_lahir}} </td>
                        <td> {{$value->hoby}} </td>
                        <td><a href="{{url('/file/'.$value->file)}}" target="_blank">
                            <img src="{{asset('/img/dok.jpg/')}}" width="30px" height="30px"></a></td>
                        <td><a class="btn btn-danger btn-sm" href="{{url('/del/'.$value->id)}}"> Hapus </a> 
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{$value->id}}"> Edit </button>
                        </td>
                    </tr>
    <div class="modal fade" id="edit{{$value->id}}" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">EDIT</h4></center>
        </div>
        <div class="modal-body">
           <form action="{{url('/dit')}}" method="post" enctype="multipart/form-data">{{ csrf_field()}}
                        @csrf
                        
                        <div class="form-group row">
                            <label for="id" class="col-sm-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="hidden" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{$value->id}}" required autofocus>

                                @if ($errors->has('id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{$value->nama}}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tempat" class="col-md-4 col-form-label text-md-right">{{ __('Tempat') }}</label>

                            <div class="col-md-6">
                                <input id="tempat" type="text" class="form-control{{ $errors->has('tempat') ? ' is-invalid' : '' }}" name="tempat" value="{{$value->tempat}}"required>

                                @if ($errors->has('tempat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tempat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="date" class="form-control{{ $errors->has('tanggal_lahir') ? ' is-invalid' : '' }}" name="tanggal_lahir" value="{{$value->tanggal_lahir}}"required>

                                @if ($errors->has('tanggal_lahir'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hoby" class="col-md-4 col-form-label text-md-right">{{ __('Hoby') }}</label>

                            <div class="col-md-6">
                                <input id="hoby" type="text" class="form-control{{ $errors->has('hoby') ? ' is-invalid' : '' }}" name="hoby" value="{{$value->hoby}}" required>

                                @if ($errors->has('hoby'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hoby') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" value="{{$value->foto}}" required>

                                @if ($errors->has('foto'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" name="file" value="{{$value->file}}"required>

                                @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-6">
                                <br><br>
                                <center><button type="submit" class="btn btn-primary" >
                                    {{ __('simpan') }}
                                </button></center>
                                <br>
                            </div>
                        </div>
                    </form>
        </div>
      </div>
    </div>
  </div>
</div>
                    @endforeach
             </table>
@include('tambih')
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection