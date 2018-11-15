@extends('layouts.admin')
@section('content')
</head>
<body>
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Perpustakaan</h3>
                </div>
                    <div class="box-body">
                    <table class="table table-Warning table-striped table-hover">
                    <tr>
                        <td colspan="5"><a href="/add"> <button type="button" class="btn btn-primary btn-md">Tambah</button></a></td>
                    </tr>
                    <tr>
                        <td> Judul Buku </td>
                        <td> Pengarang  </td>
                        <td> Penerbit </td>
                        <td> Tahun Penerbit </td>
                        <td> Aksi </td>
                    </tr>
                    @foreach($bk as $value)
                    <tr>
                        <td> {{$value->judul_buku}} </td>
                        <td> {{$value->pengarang}} </td>
                        <td> {{$value->penerbit}} </td>
                        <td> {{$value->tahun_penerbit}} </td>
                    <td><a class="btn btn-danger btn-sm" href="{{url('/destroy/'.$value->id)}}"> Hapus </a> 
                    <a class="btn btn-warning btn-sm" href="{{url('/setting/'.$value->id)}}"> Edit </a>
                    </td>
                    </tr>
                    @endforeach
                    
                    </table>
                     </div>
            </a></td>
        </tr>
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