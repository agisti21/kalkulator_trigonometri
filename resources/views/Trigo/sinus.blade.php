@extends('layout')
   
@section('content')
 <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title" style="text-align: center; margin-top: 200px; margin-bottom: 80px;"> Menentukan <span class="home__title-color">Aturan Sinus</span></h1>

                    <a href="#sincos" class="button" style="margin-left: 35%;width:300px;text-align: center; margin-bottom: 250px">Mulai Belajar</a>
                </div>

                <div class="home__social">
                    

                <div class="home__img">    
                    
                </div>
            </section>
      <section class="about section " id="sincos">
                <h2 class="section-title" id="sincos">Menentukan Aturan Sinus</h2>

                <div class="about__container bd-grid" style="text-align: center; margin-left: 30%;"> 
                   <div class="main">
    <div class="container">
       <div class="section-header">
            
          </div>
      <div class="row">
         <div class="col-12 col-md-6 col-lg-6">
          <img src="../img/segitigasembarang.jpeg" style=" margin-top: 10px; width: 200px; margin-left: 30%; margin-bottom: 20px;">
          <style type="text/css">
                input{
                    width: 500px;
                    height: 30px;
                    margin-bottom: 3px;
                    border-radius: 3px;

                }
                .pilih{
                    width: 200px;
                     margin-bottom: 10px;
                }
            </style>
          <div class="form-group">
                      <strong>Masukan Besar Sudut</strong>
                      <select name="" id="">
                        <option value="">A</option>
                        <option value="">B</option>
                        <option value="">C</option>
                      </select>
                      <input type ="number" class="form-control" name="sudut_a" id="sudut_a">
                     </div>
                     <br>
                     <div class="form-group">
                      <strong>Masukan Besar Sudut</strong>
                      <select name="" id="">
                        <option value="">A</option>
                        <option value="">B</option>
                        <option value="">C</option>
                      </select>
                      <input type ="number" class="form-control" name="sudut_b" id="sudut_b">
                     </div>
                     <br>
                     <div class="form-group">
                      <strong>Masukan Panjang Sisi</strong>
                      <select name="" id="">
                        <option value="">a</option>
                        <option value="">b</option>
                        <option value="">c</option>
                      </select>
                      <input type ="number" class="form-control" name="sisi" id="sisi">
                     </div>
                     <input class="btn btn-success" type="submit" onclick="hitung()" value="Hasil" style="background-color: #0384fc; color: white;margin-bottom: 10px;" >
                     <br>
                      <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Penyelesaian</strong> 
                                  <input type="text" id="penyelesaian1" class="form-control" placeholder="penyelesaian1" readonly="">
                                </div>
                            </div> -->
                            <br>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                  
                                  <input type="text" id="penyelesaian2" class="form-control" readonly="">
                                </div>
                            </div>
                            <br>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   
                                  <input type="text" id="penyelesaian3" class="form-control"readonly="">
                                </div>
                            </div>
                            <br>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    
                                  <input type="text" id="penyelesaian4" class="form-control" readonly="">
                                </div>
                            </div>
                            <br>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Hasil</strong> 
                                  <input type="text" id="hasil" class="form-control" placeholder="hasil" readonly="">
                                </div>
                            </div>
         </div>
      </div>
    </div>
  </div>                          
                </div>
                 
            </section>
            <script type="text/javascript">
              function hitung() {
    var sudut_a = parseInt(document.getElementById("sudut_a").value);
    var sudut_b = parseInt(document.getElementById("sudut_b").value);
    var sisi = parseInt(document.getElementById("sisi").value);

    var total;

    var hasils = document.getElementById("hasil");
    var penyelesaian = document.getElementById("penyelesaian");



    if (isNaN(sudut_a) || isNaN(sudut_b) || isNaN(sisi)) {
        alert('isi form dengan angka!')

    } else {
        var hasil = parseInt(sisi) * Math.sin(sudut_a * Math.PI / 180) / Math.sin(sudut_b * Math.PI / 180);
         total = hasil.toFixed(2);
       
    }
      
      sina =  Math.sin(sudut_a * Math.PI / 180).toFixed(3);
      sinb =  Math.sin(sudut_b * Math.PI / 180).toFixed(3);
      penjum = parseInt(sisi) * sina;

      // rumus = "a/sin A = b/sin B = c/sin C ";
      rumus2 = ' x/' + 'sin' + sudut_a  + ' = ' + sisi  + '/' + 'sin' + sudut_b;
      rumus3 = ' x/' + sina  + ' = ' + sisi + '/'  + sinb ;
      rumus4 = 'x'+ ' = ' + penjum  + ' ' + '/' + ' ' + sinb ;
      totals = 'x' + ' = '  + total ;

        // penyelesaian1.value = rumus;
        penyelesaian2.value = rumus2;
        penyelesaian3.value = rumus3;
        penyelesaian4.value = rumus4;
        
        hasils.value = totals;
    }
            </script>
@endsection