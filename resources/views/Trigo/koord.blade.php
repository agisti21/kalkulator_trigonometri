@extends('layout')
   
@section('content')
 <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title" style="text-align: center; margin-top: 200px; margin-bottom: 80px;">Menentukan <br> <span class="home__title-color">Koordinat Kartesius</span></h1>

                    <a href="#sincos" class="button" style="margin-left: 35%;width:300px;text-align: center; margin-bottom: 250px">Mulai Belajar</a>
                </div>

                <div class="home__social">
                    

                <div class="home__img">    
                    
                </div>
            </section>
    

             <section class="about section " id="sincos">
                <h2 class="section-title" id="sincos">Menentukan Koordinat Kartesius</h2>

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
     <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Masukkan r</strong>
                    <br>
                    <input type = "number" id="a1" autocomplete = "off" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Masukkan Sudut Alfa</strong>
                    <br>
                    <input type = "number" id = "a2" autocomplete = "off">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <br>
           
                <input class="btn btn-success" type="submit" onclick="hitung()" value="Hasil" style="background-color: #0384fc; color: white;margin-bottom: 10px;" >
                <br>
                    <strong>Penyelesaian</strong>
                    <br>
                    <input type="text" id="penyelesaianx"  style=" width: 380px;" readonly>

                    <input type="text" id="hasilx" style=" width: 380px;" readonly>
                                
                    <input type="text" id="penyelesaiany" readonly style=" width: 380px;" readonly>
                
                    <input type="text" id="hasily" style=" width: 380px;"readonly >
                    <br>
                    <strong>Hasil</strong>
                    <br>
                    <input type="text" id="hasil"  style=" width: 380px;" readonly>


        
                

    </div>
</div>
</section>

<script type="text/javascript">
    function hitung() {

    var a1 = parseInt(document.getElementById("a1").value);
    var a2 = parseInt(document.getElementById("a2").value);
   
    var hasil = document.getElementById("hasil");
    var hasilx = document.getElementById("hasilx");
    var penyelesaianx = document.getElementById("penyelesaianx");
    var hasily = document.getElementById("hasily");
    var penyelesaiany = document.getElementById("penyelesaiany");


    var total;

    if (isNaN(a1) || isNaN(a2)) {
        alert('isi form dengan angka!')

    } else {
        
        var cos = Math.cos((a2) * Math.PI / 180);
        var cosx = a2;
        var r = a1;
        var hslx = a1 * cos;
        var rumusx =' x ' + ' = ' + r + '  x  ' + 'cos(' + cosx + ')';
        var totalx = ' (=) ' + r + '  x  ' + cos.toFixed(4) + '  =  ' + hslx.toFixed(3);

        var sin = Math.sin((a2) * Math.PI / 180);
        var sinx = a2;
        var hsly = a1 * sin;
        var rumusy = ' y ' + ' = ' +  r + '  x  ' + 'sin(' + sinx + ')';
        var totaly = ' (=) ' + r + '  x  '  + sin.toFixed(4) + '  =  ' + hsly.toFixed(3);

        var total = '('+ hslx.toFixed(3) + ' , ' + hsly.toFixed(3) + ')';
    }
    penyelesaianx.value = rumusx;
    hasilx.value = totalx;

    penyelesaiany.value = rumusy;
    hasily.value = totaly;

    hasil.value = total;
}
</script>
@endsection