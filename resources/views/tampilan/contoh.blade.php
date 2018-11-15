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
  <script>
    $( document ).ready(function() {
      $( "#tombol_hide" ).click(function() {     
        $("h1").hide();
      });
       
      $( "#tombol_show" ).click(function() {     
        $("h1").show();
      });
       
      $( "#tombol_small" ).click(function() {     
        $("h1").css("font-size","20px");
      });
       
      $( "#tombol_yellow" ).click(function() {     
        $("h1").css( "color", "yellow" );
      });

       $( "#tombol_big" ).click(function() {     
        $("h1").css("font-size","50px");
      });

    });
   </script>

   <script>
   $( document ).ready(function() {
     $("#tombol").click(function() {    
       $("#test.saja").css( "color", "yellow" );
       $("div p.warna").css( "color", "pink" );
       $("#ts.war").css("color","lightblue");
     });
   });
   </script>

   <script>
    $(document).ready(function(){
      $("#coba").click(function(){
        alert('makasih loh hehe');
      });
    });
   </script>

   <script>
    $(document).ready(function(){
      $("#tombol").click(function(){
        $("#nama").val("joko");
      });
    });
   </script>

</head>
<body>
  @include('layouts.navbar')
     <br><br>
    @section('content')
  <h1>Assalamualaikum sobat alfina </h1>
  <button id="tombol_hide">Sembunyikan</button>
  <button id="tombol_show">Tampilkan</button>
  <button id="tombol_small">Perkecil</button>
  <button id="tombol_yellow">kuningkan</button>
  <button id="tombol_big"> perbesar </button>

    <br><br>
    <p id="test" class="saja">
     Selamat Datang 
    </p>
    <p id="ts" class="war">
     alfina septrianti
    </p>
    <div>
    <p class="warna">
    <em>Sebuah paragraf </em> tanpa atribut apapun
     </p>
    </div>
    <button id="tombol">Action</button>

    <br><br>
    <p id="coba">
         Mangga klik we
    </p>

</body>
</html> 