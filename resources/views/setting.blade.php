<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="{{ asset('tampilan/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tampilan/css/bootstrap.min.css') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js')}}"></script>
</head>
<body>
	<div class="container">
   	 <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editing') }}</div>
					<div class="card-body">
                    	<form action="{{url('/update')}}" method="post">{{ csrf_field()}}
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
                            <label for="judul_buku" class="col-sm-4 col-form-label text-md-right">{{ __('Judul_buku') }}</label>

                            <div class="col-md-6">
                                <input id="judul_buku" type="text" class="form-control{{ $errors->has('judul_buku') ? ' is-invalid' : '' }}" name="judul_buku" value="{{$value->judul_buku}}" required autofocus>

                                @if ($errors->has('judul_buku'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('judul_buku') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pengarang" class="col-md-4 col-form-label text-md-right">{{ __('Pengarang') }}</label>

                            <div class="col-md-6">
                                <input id="pengarang" type="text" class="form-control{{ $errors->has('pengarang') ? ' is-invalid' : '' }}" name="pengarang" value="{{$value->pengarang}}" required autofocus>

                                @if ($errors->has('pengarang'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pengarang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="penerbit" class="col-md-4 col-form-label text-md-right">{{ __('Penerbit') }}</label>

                            <div class="col-md-6">
                                <input id="penerbit" type="text" class="form-control{{ $errors->has('penerbit') ? ' is-invalid' : '' }}" name="penerbit" value="{{$value->penerbit}}" required autofocus>

                                @if ($errors->has('penerbit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('penerbit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tahun_penerbit" class="col-md-4 col-form-label text-md-right">{{ __('Tahun_penerbit') }}</label>

                            <div class="col-md-6">
                                <input id="tahun_penerbit" type="text" class="form-control{{ $errors->has('tahun_penerbit') ? ' is-invalid' : '' }}" name="tahun_penerbit" value="{{$value->tahun_penerbit}}" required autofocus>

                                @if ($errors->has('tahun_penerbit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tahun_penerbit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('setting') }}
                                </button>

                             
                            </div>
                        </div>
                    </form>
                </div>
</body>
</html>