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
    $(document).ready(function(){
    $("#tekan").click(function(){
         var angka1=$("#angka1").val();
         var angka2=$("#angka2").val();
         var jumlah=(parseInt(angka1)+parseInt(angka2));
         $("#jumlah").val(jumlah);
     });
    });
   </script>

    <script>
    $(document).ready(function(){
    $("#go").click(function(){
         var ang1=$("#ang1").val();
         var ang2=$("#ang2").val();
         var total=(parseInt(ang1)*parseInt(ang2));
         $("#total").val(total);
     });
    });
   </script>

    <script>
    $(document).ready(function(){
    $("#klik").click(function(){
         var a1=$("#a1").val();
         var a2=$("#a2").val();
         var tot=(parseInt(a1)/parseInt(a2));
         $("#tot").val(tot);
     });
     });
    </script>

    <script>
    $(document).ready(function(){
    $("#cb").click(function(){
         var angk1=$("#angk1").val();
         var angk2=$("#angk2").val();
         var hsl=(parseInt(angk1)-parseInt(angk2));
         $("#hasil").val(hsl);
     });
     });
     </script>


    <script>
    $(document).ready(function(){
    $("#saya").click(function(){
         var teo=$("#teo").val();
         var pra=$("#pra").val();
         var sikap=$("#sikap").val();
         var Ratarata=(parseInt(teo)+parseInt(pra)+parseInt(sikap))/3;
         $("#rata").val(Ratarata);
            if(Ratarata > 90){
              $('#hslll').val('Sangat Bagus');
            }else if(Ratarata > 85){
              $('#hslll').val('Bagus');
            }else if(Ratarata  > 80){
              $('#hslll').val('Lumayan'); 
            }else if(Ratarata > 75){
              $('#hslll').val('jelek');
            }else{
             $('#hslll').val('perbaiki');
            }
     });
     });
    </script>
</head>
<body>
@include('layouts.navbar')
     <br><br>
    @section('content')
    <center><h1> Belajar JQuery </h1></center>
    <h4><b>Penjumlahan</b></h4><br>
    Angka ke-1 : <input type="text" name="angka1" id="angka1"/> <br><br>
    Angka ke-2 : <input type="text" name="angka2" id="angka2"/> <br><br>
    Jumlah yoo : <input type="text" name="jumlah" id="jumlah"/> <br><br>
    <button type="button" id="tekan" class="btn btn-dark btn-sm">Klik</button>

   <center><h4><b>Perkalian</b></h4><br>
    Angka ke-1 : <input type="text" name="ang1" id="ang1"/> <br><br>
    Angka ke-2 : <input type="text" name="ang2" id="ang2"/> <br><br>
    Jumlah yoo : <input type="text" name="total" id="total"/> <br><br>
    <button type="button" id="go" class="btn btn-dark btn-sm">Klik</button></center><br>

    <h4><b>Pembagian</b></h4><br>
    Angka ke-1 : <input type="text" name="a1" id="a1"/> <br><br>
    Angka ke-2 : <input type="text" name="a2" id="a2"/> <br><br>
    Jumlah yoo : <input type="text" name="tot" id="tot"/> <br><br>
    <button type="button" id="klik" class="btn btn-dark btn-sm">Klik</button><br>

    <center><h4><b>Pengurangan</b></h4><br>
    Angka ke-1 : <input type="text" name="angk1" id="angk1"/> <br><br>
    Angka ke-2 : <input type="text" name="angk2" id="angk2"/> <br><br>
    Jumlah yoo : <input type="text" name="hasil" id="hasil"/> <br><br>
    <button type="button" id="cb" class="btn btn-dark btn-sm">Klik</button></center><br>

    <h4><b>Menghitung Rata-Rata</b></h4><br>
    Teori : <input type="text" name="teo" id="teo"/> <br><br>
    Praktek : <input type="text" name="pra" id="pra"/> <br><br>
    Sikap : <input type="text" name="sikap" id="sikap"/> <br><br>
    <button type="button" id="saya" class="btn btn-dark btn-sm">Klik</button></center><br>
    Rata-Rata <input type="text" name="rata" id="rata"/> <br><br>
    Keterangan : <input type="text" name="hslll" id="hslll">


</body>
</html> 