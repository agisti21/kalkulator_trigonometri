@extends('layout')
   
@section('content')
 <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title" style="text-align: center; margin-top: 200px; margin-bottom: 80px;">Menentukan  <span class="home__title-color"> Sin,Cos,Tan,Cosec,Sec dan Ctg</span></h1>

                    <a href="#sincos" class="button" style="margin-left: 35%;width:300px;text-align: center; margin-bottom: 250px">Mulai Belajar</a>
                </div>

                <div class="home__social">
                    

                <div class="home__img">    
                    
                </div>
            </section>
    
    <section class="about section " id="sincos">
                <h2 class="section-title" id="sincos">Menentukan Sin,Cos,Tan,Cosec,Sec dan Ctg</h2>

                <div class="about__container bd-grid" style="text-align: center; margin-left: 30%;"> 
                    <div class="row">

            <div class="col-12 col-md-6 col-lg-6">
          <img src="../img/demisa.jpg" style=" width: 400px; margin-left: 7%; margin-bottom: 20px;" >
            </div>

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

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sudut Depan</strong>
                    <br>
                    <input type ="number" name="depan" id="depan" autocomplete = "off" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sudut Miring</strong>
                    <br>
                    <input type ="number" name="miring" id = "miring" autocomplete = "off">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sudut Samping</strong>
                    <br>
                    <input type = "number" name="samping" id="samping" autocomplete = "off">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong></strong>
                <br>
                <select id="op" class="pilih" style="color: black;width: 250px; height: 30px; border-radius: 3px;"  >
                    <option value="sin">Sin</option>
                    <option value="cos">Cos</option>
                    <option value="tan">Tan</option>
                    <option value="cosec">Cosec</option>
                    <option value="secan">Secan</option>
                    <option value="ctg">Ctg</option>
                </select>
                <br>
                <br>
                <input class="btn btn-success" type="submit" onclick="hitung()" value="Hasil" style="background-color: #0384fc; color: white;margin-bottom: 10px; " >
                <br>
                <strong>Penyelesaian</strong>
                <br>
                <input type="text" id="penyelesain" readonly>
                <br>
                <br>
                <strong>Hasil</strong>
                <br>
                <input type="text" id="hasil" readonly>

               
            </div>
    </div>                                
</div>
<script src="../assets/js/sincos.js"></script>
</section>
@endsection
