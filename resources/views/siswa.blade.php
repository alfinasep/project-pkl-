@extends('layouts.admin')
@section('content')
</head>
    <body>
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pendaftaran</h3>
                </div>
                <div class="box-body">
                    <center><table class="table table-Warning table-striped table-hover">
                    <tr>
                    <td colspan="5"><a href="/tambahh"> <button type="button" class="btn btn-primary btn-md">Tambah</button></a></td>
                    </tr>
                    <tr>
                        <td> Nama </td>
                        <td> Jurusan </td>
                        <td> Asal sekolah </td>
                        <td> Alamat </td>
                        <td> Tindakan </td>
                    </tr>
                    @foreach($yo as $value)
                    <tr>
                        <td> {{$value->nama}} </td>
                        <td> {{$value->jurusan}} </td>
                        <td> {{$value->asal_sekolah}} </td>
                        <td> {{$value->alamat}}</td>
                        <td> <a class="btn btn-danger btn-sm" href="{{url('/hps/'.$value->id)}}"> Hapus </a>
                             <a class="btn btn-warning btn-sm" href="{{url('/edit/'.$value->id)}}"> Edit </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                </div>
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