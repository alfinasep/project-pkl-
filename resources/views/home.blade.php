@extends('layouts.admin')
@section('content')
</head>
    <body>
        <h1> Halaman Pertama </h1>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center><h1> Halaman Utama <a href="{{ url('/') }}"> </h1></center>
                    <center><buttton class="btn btn-info btn-sm"> Go </buttton></center> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection