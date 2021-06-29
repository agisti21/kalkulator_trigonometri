@extends('layout')
   
@section('content')
 <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title" style="text-align: center; margin-top: 200px; margin-bottom: 80px;">Menentukan <span class="home__title-color"> Aturan Cosinus</span></h1>

                    <a href="#sincos" class="button" style="margin-left: 35%;width:300px;text-align: center; margin-bottom: 250px">Mulai Belajar</a>
                </div>

                <div class="home__social">
                    

                <div class="home__img">    
                    
                </div>
            </section>

  <section class="about section " id="sincos">
                <h2 class="section-title" id="sincos">Menentukan Aturan Cosinus</h2>

                <div class="about__container bd-grid" style="text-align: center; margin-left: 30%;"> 
                    <div class="main">

    <div class="container">
      
       <div class="section-header">
           
          </div>
      <div class="row">
         <div class="col-12 col-md-6 col-lg-6">
          <img src="../img/segi3.jpeg" style=" margin-top: 8px; margin-bottom: 10px; margin-left: 20%; width: 300px">
          <!-- <p style="font-size: 18px; text-align: center;">Besar sudut di hadapan sisi terpendek adalah....</p> -->
          <div class="form-group">
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
                      <strong>Masukan Panjang </strong>
                      <select name="" id="">
                        <option value="">a</option>
                        <option value="">b</option>
                        <option value="">c</option>
                      </select>
                      <input type ="number" class="form-control" name="angka_a" id="angka_a">
                     </div>
                     <br>
                     <div class="form-group">
                      <strong>Masukan Panjang</strong>
                      <select name="" id="">
                        <option value="">a</option>
                        <option value="">b</option>
                        <option value="">c</option>
                      </select>
                      <input type ="number" class="form-control" name="angka_b" id="angka_b">
                     </div>
                     <br>
                     <div class="form-group">
                      <strong>Masukan Sudut</strong>
                      <select name="" id="">
                        <option value="">A</option>
                        <option value="">B</option>
                        <option value="">C</option>
                      </select>
                      <input type ="number" class="form-control" name="angka_c" id="angka_c" placeholder="Derajat&deg;">
                     </div>
                     <br>
                     <div class="form-group">
                        
                        <input class="btn btn-success" type="submit" onclick="hitung()" value="Hasil" style="background-color: #0384fc; color: white;margin-bottom: 10px;" >
                          <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Penyelesaian</strong> 
                                  <!-- <input type="text" id="penyelesaian1" class="form-control"  readonly=""> -->
                                </div>
                            </div>
                            <br>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                  
                                  <input type="text" id="penyelesaian2" class="form-control" readonly="">
                                </div>
                            </div>
                            <br>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   
                                  <input type="text" id="penyelesaian3" class="form-control"  readonly="">
                                </div>
                            </div>
                            <br>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    
                                  <input type="text" id="penyelesaian4" class="form-control"  readonly="">
                                </div>
                            </div>
                            <br>
                             <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    
                                  <input type="text" id="penyelesaian5" class="form-control"  readonly="">
                                </div>
                            </div>
                            <br>
                            <strong>Hasil</strong> 
                        <input type="text" id="hasil" readonly>
                    </div>
                    <br>
                    
         </div>
      </div>
    </div>
  </div>                              
                </div>
            </section>
  
  </script>

  <script type="text/javascript">
        function hitung() {

        var a1 = parseInt(document.getElementById("angka_a").value);
        var a2 = parseInt(document.getElementById("angka_b").value);
        var a3 = parseInt(document.getElementById("angka_c").value);


     

        var hasil = document.getElementById("hasil");

        var total;

        if (isNaN(a1) || isNaN(a2) || isNaN(a3)) {
            alert('isi form dengan angka!')

        } else {

            
            var hasil1 = Math.pow(a1,2) + Math.pow(a2,2) - 2*(parseInt(a1) * parseInt(a2)) * Math.cos((a3) * Math.PI / 180);  
            var hasil2 = Math.sqrt(parseInt(hasil1));
            total = 'x = ' + hasil2.toFixed(1);         
            
        }

        sin =  Math.cos(a3 * Math.PI / 180).toFixed(4);
        sin2 =  Math.cos(a3 * Math.PI / 180).toFixed(3);

        p1 = a1 * a1 ;
        p2 = a2 * a2 ;
        p3 = 2 * a1 * a2;
        p4 = sin;
        p5 = p3 * sin;
        p6 = p1 + p2;
        p7 = p3 * sin2;
        p8 = p6 - p7;

        // rumus =  'c^2 = a^2 + b^2 - 2ab cos C';
        rumus2 = 'x^2' + ' = '  + a1 + '^2' + ' + ' + a2 + '^2' + ' - ' + ' 2 ' + '('+ a1 +')' + '('+ a2 +')' + ' cos'+  a3 ;
        rumus3 = 'x^2' + ' = ' + p1 + ' + ' + p2 + ' - ' + p3 + '('+ p4 +')'; 
        rumus4 = 'x^2' + ' = ' + p6 + ' - ' + p7;
        rumus5 = 'x^2' + ' = ' + p8;

        // penyelesaian1.value = rumus;
        penyelesaian2.value = rumus2;
        penyelesaian3.value = rumus3;
        penyelesaian4.value = rumus4;
        penyelesaian5.value = rumus5;
       
        hasil.value = total;
        }
    
    </script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection