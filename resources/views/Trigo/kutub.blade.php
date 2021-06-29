@extends('layout')
   
@section('content')
<main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title" style="text-align: center; margin-top: 200px; margin-bottom: 80px;">Menentukan <br> <span class="home__title-color">Koordinat Kutub</span></h1>

                    <a href="#sincos" class="button" style="margin-left: 35%;width:300px;text-align: center; margin-bottom: 250px">Mulai Belajar</a>
                </div>

                <div class="home__social">
                    

                <div class="home__img">    
                    
                </div>
            </section>
    

             <section class="about section " id="sincos">
                <h2 class="section-title" id="sincos">Menentukan Koordinat Kutub</h2>

                <div class="about__container bd-grid" style="text-align: center; margin-left: 30%;"> 
                   <div class="container">
                     <style type="text/css">
                input{
                    width: 500px;
                    height: 30px;
                    margin-bottom: 5px;
                    border-radius: 3px;

                }
                .pilih{
                    width: 200px;
                     margin-bottom: 10px;
                }
            </style>
<div class="container">
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Masukkan Angka X</strong>
                    <br>
                    <input type = "number"  id="a1" autocomplete = "off" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Masukkan Angka Y</strong>
                    <br>
                    <input type = "number"  id = "a2" autocomplete = "off">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <br>
           
                <input class="btn btn-success" type="submit" onclick="hitung()" value="Hasil" style="background-color: #0384fc; color: white;margin-bottom: 10px;" >
                <br>
                <br>
                    <strong>Penyelesaian</strong>
                    <br>
                    <input type="text" id="penyelesaiana" style=" width: 380px; "readonly>
                
                    <input type="text" id="hasila" style=" width: 380px; " readonly>
                
                    <input type="text" id="penyelesaiantan"  style=" width: 380px; " readonly>
                
                    <input type="text" id="hasiltan" style=" width: 380px; " readonly>
                </th>
                <br>
                    <strong>Hasil</strong>
                    <br>
                    <input type="text" id="hasil"  style=" width: 380px;" readonly>

            </div>
             
    </div>
</div>
</section>
<script type="text/javascript">
    function hitung() {

    var a1 = parseInt(document.getElementById("a1").value);
    var a2 = parseInt(document.getElementById("a2").value);
   
    var hasil = document.getElementById("hasil");

    var hasila = document.getElementById("hasila");
    var penyelesaiana = document.getElementById("penyelesaiana");
    var hasiltan = document.getElementById("hasiltan");
    var penyelesaiantan = document.getElementById("penyelesaiantan");


    if (isNaN(a1) || isNaN(a2)) {
        alert('isi form dengan angka!')

    } else {
        var x = a1;
        var y = a2;
        var a = Math.pow(a1,2) + Math.pow(a2,2);
        var r = Math.sqrt(a); 
        var rumusa = ' r ' + ' = ' + ' akar ' + a1 + '^2' + '  +  '+ a2 + '^2';
        var totala = ' r ' + ' = ' + r.toFixed(3);

        var tan = Math.tan((a2 / a1)* Math.PI / 180).toFixed(4);
        var rumustan = 'tan = ' + y + "/" + x; 
        var totaltan = 'tan = ' + tan;

        var total = '('+ r.toFixed(3) + ' , ' + tan + ')';
    }

    penyelesaiana.value = rumusa;
    hasila.value = totala;

    penyelesaiantan.value = rumustan;
    hasiltan.value = totaltan;

    hasil.value = total;
}
</script>
@endsection