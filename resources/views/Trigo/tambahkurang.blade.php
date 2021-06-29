@extends('layout')
   
@section('content')
 <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title" style="text-align: center; margin-top: 200px; margin-bottom: 80px;"> Menentukan <br><span class="home__title-color">Jumlah dan Selisih Dua Sudut</span></h1>

                    <a href="#sincos" class="button" style="margin-left: 35%;width:300px;text-align: center; margin-bottom: 250px">Mulai Belajar</a>
                </div>

                <div class="home__social">
                    

                <div class="home__img">    
                    
                </div>
            </section>
    
 <section class="about section " id="sincos">
                <h2 class="section-title" id="sincos">Menentukan Jumlah dan Selisih Dua Sudut</h2>

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
                }
            </style>
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sudut</strong>
                    <br>
                    <input type="number" name="sudut" id="sudut" autocomplete = "off" >
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong></strong>
                <select id="op" class="pilih">
                    <option value="sin+sin">Sin+Sin</option>
                    <option value="sin-sin">Sin-Sin</option>
                    <option value="cos+cos">Cos+Cos</option>
                    <option value="cos-cos">Cos-Cos</option>
                    <option value="tan+tan">Tan+Tan</option>
                    <option value="tan-tan">Tan-Tan</option>
                </select>
                <br>
                <input class="btn btn-success" type="submit" onclick="hitung()" value="hasil" style="background-color: #0384fc; color: white;margin-bottom: 10px;" >
                     <br>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Penyelesaian</strong> 
                                  <input type="text" id="penyelesaian1" class="form-control" readonly="">
                                </div>
                            </div>
                            <br>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                  
                                  <input type="text" id="penyelesaian2" class="form-control" readonly="">
                                </div>
                            </div>
                            <br>
                            <!-- <div class="col-xs-12 col-sm-12 col-md-12">
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
                            <br> -->
                      <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Hasil</strong> 
                                  <input type="number" min="0" id="hasil" class="form-control" placeholder="hasil" readonly="">
                                </div>
                            </div>
            </div>
    </div>
   <script src="../assets/js/tambahkurang.js"></script>
   <script type="text/javascript">

    function hitung() {

    var sudut = parseInt(document.getElementById("sudut").value);
    var hasils = document.getElementById("hasil");
    var penyelesaian1 = document.getElementById("penyelesaian1");
    var penyelesaian2 = document.getElementById("penyelesaian2");
    var penyelesaian3 = document.getElementById("penyelesaian3");
    var penyelesaian4 = document.getElementById("penyelesaian4");

    var op = document.getElementById("op").value;
    var alfa;
    var beta;
    var sina;
    var sinb;
    var cosa;
    var cosb;
    var tana;
    var tanc;
    var sinsin; 
    var total ;
    var keterangan;
    

    if (isNaN(sudut)) {
        alert('isi form dengan angka!')

    } else {

        if (op == "sin+sin") {
                
                if (sudut > 360){ 
                    alfa = 330;
                    beta = sudut - alfa;
                }else if (sudut > 330){ 
                    alfa = 315;
                    beta = sudut - alfa;
                }else if (sudut > 315){ 
                    alfa = 300;
                    beta = sudut - alfa;
                }else if (sudut > 300){ 
                    alfa = 270;
                    beta = sudut - alfa;
                }else if (sudut > 270){ 
                    alfa = 249;
                    beta = sudut - alfa;
                }else if (sudut > 240){ 
                    alfa = 225;
                    beta = sudut - alfa;
                }else if (sudut > 225){ 
                    alfa = 210;
                    beta = sudut - alfa;
                }else if (sudut > 210){ 
                    alfa = 180;
                    beta = sudut - alfa;
                }else if (sudut > 180){ 
                    alfa = 150;
                    beta = sudut - alfa;
                }else if (sudut > 150){ 
                    alfa = 135;
                    beta = sudut - alfa;
                }else if (sudut > 135){ 
                    alfa = 120;
                    beta = sudut - alfa;
                }else if (sudut > 120){ 
                    alfa = 90;
                    beta = sudut - alfa;
                }else if (sudut > 90){ 
                    alfa = 60;
                    beta = sudut - alfa;
                }else if(sudut > 60){
                    alfa = 45;
                    beta = sudut - alfa;
                 }else if(sudut > 45){
                    alfa = 30;
                    beta = sudut - alfa;
                 }else {
                    alfa = 0;
                     beta =0;
                 }
                var sinAlfa = Math.sin((alfa) * Math.PI / 180);
                var sinBeta = Math.sin((beta) * Math.PI / 180);
                var cosAlfa = Math.cos((alfa) * Math.PI / 180);
                var cosBeta = Math.cos((beta) * Math.PI / 180);        
        rumus2 = '('+'sin '+alfa+' * '+'cos  '+beta+' ) '+' + '+'( '+'cos  '+alfa+' * '+'sin '+beta+' ) ';
        total = (sinAlfa * cosBeta) + (cosAlfa * sinBeta);
        operator= '+' ;
        keterangan='sin'
        } else if (op == "sin-sin") {
                                
                if(sudut <= 30){
                            alfa = 45;
                            beta = alfa - sudut;
                }else if (sudut <= 60){ 
                            alfa = 90;
                            beta = alfa - sudut;
                }else if (sudut <= 90){ 
                            alfa = 120;
                            beta = alfa - sudut;
                }else if (sudut <= 120){ 
                            alfa = 135;
                            beta = alfa - sudut;
                }else if (sudut <= 135){ 
                            alfa = 150;
                            beta = alfa - sudut;
                }else if (sudut <= 150){ 
                            alfa = 180;
                            beta = alfa - sudut;
                }else if (sudut <= 180){ 
                            alfa = 210;
                            beta = alfa - sudut;
                }else if (sudut <= 210){ 
                            alfa = 225;
                            beta = alfa - sudut;
                }else if (sudut <= 225){ 
                            alfa = 240;
                            beta = alfa - sudut;
                }else if (sudut <= 225){ 
                            alfa = 240;
                            beta = alfa - sudut;
                }else if (sudut <= 240){ 
                            alfa = 270;
                            beta = alfa - sudut;
                }else if (sudut <= 270){ 
                            alfa = 300;
                            beta = alfa - sudut;
                }else if (sudut <= 300){ 
                            alfa = 315;
                            beta = alfa - sudut;
                }else if (sudut <= 315){ 
                            alfa = 330;
                            beta = alfa - sudut;
                }else if (sudut <= 330){ 
                            alfa = 360;
                            beta = alfa - sudut;
                }else {
                    alfa = 0;
                     beta =0;
                 } 
                 var sinAlfa = Math.sin((alfa) * Math.PI / 180);
                var sinBeta = Math.sin((beta) * Math.PI / 180);
                var cosAlfa = Math.cos((alfa) * Math.PI / 180);
                var cosBeta = Math.cos((beta) * Math.PI / 180);        
                rumus2 = '('+'sin '+alfa+' * '+'cos  '+beta+' ) '+' - '+'( '+'cos  '+alfa+' * '+'sin '+beta+' ) ';
                total= (sinAlfa * cosBeta) - (cosAlfa * sinBeta)
                keterangan='sin'
                operator= ' - ' ;

        } else if (op == "cos+cos") {
            if (sudut > 360){ 
                    alfa = 330;
                    beta = sudut - alfa;
                }else if (sudut > 330){ 
                    alfa = 315;
                    beta = sudut - alfa;
                }else if (sudut > 315){ 
                    alfa = 300;
                    beta = sudut - alfa;
                }else if (sudut > 300){ 
                    alfa = 270;
                    beta = sudut - alfa;
                }else if (sudut > 270){ 
                    alfa = 249;
                    beta = sudut - alfa;
                }else if (sudut > 240){ 
                    alfa = 225;
                    beta = sudut - alfa;
                }else if (sudut > 225){ 
                    alfa = 210;
                    beta = sudut - alfa;
                }else if (sudut > 210){ 
                    alfa = 180;
                    beta = sudut - alfa;
                }else if (sudut > 180){ 
                    alfa = 150;
                    beta = sudut - alfa;
                }else if (sudut > 150){ 
                    alfa = 135;
                    beta = sudut - alfa;
                }else if (sudut > 135){ 
                    alfa = 120;
                    beta = sudut - alfa;
                }else if (sudut > 120){ 
                    alfa = 90;
                    beta = sudut - alfa;
                }else if (sudut > 90){ 
                    alfa = 60;
                    beta = sudut - alfa;
                }else if(sudut > 60){
                    alfa = 45;
                    beta = sudut - alfa;
                 }else if(sudut > 45){
                    alfa = 30;
                    beta = sudut - alfa;
                 }else {
                    alfa = 0;
                     beta =0;
                 }
                var sinAlfa = Math.sin((alfa) * Math.PI / 180);
                var sinBeta = Math.sin((beta) * Math.PI / 180);
                var cosAlfa = Math.cos((alfa) * Math.PI / 180);
                var cosBeta = Math.cos((beta) * Math.PI / 180);
                 operator= ' + ' ;
                 keterangan='cos'
                 rumus2 = '('+'cos '+alfa+' * '+'cos  '+beta+' ) '+' + '+'( '+'sin  '+alfa+' * '+'sin '+beta+' ) ';
                 total = (cosAlfa * cosBeta) - (sinAlfa * sinBeta);
        } else if  (op == "cos-cos") {
           
                if(sudut <= 30){
                            alfa = 45;
                            beta = alfa - sudut;
                }else if (sudut <= 60){ 
                            alfa = 90;
                            beta = alfa - sudut;
                }else if (sudut <= 90){ 
                            alfa = 120;
                            beta = alfa - sudut;
                }else if (sudut <= 120){ 
                            alfa = 135;
                            beta = alfa - sudut;
                }else if (sudut <= 135){ 
                            alfa = 150;
                            beta = alfa - sudut;
                }else if (sudut <= 150){ 
                            alfa = 180;
                            beta = alfa - sudut;
                }else if (sudut <= 180){ 
                            alfa = 210;
                            beta = alfa - sudut;
                }else if (sudut <= 210){ 
                            alfa = 225;
                            beta = alfa - sudut;
                }else if (sudut <= 225){ 
                            alfa = 240;
                            beta = alfa - sudut;
                }else if (sudut <= 225){ 
                            alfa = 240;
                            beta = alfa - sudut;
                }else if (sudut <= 240){ 
                            alfa = 270;
                            beta = alfa - sudut;
                }else if (sudut <= 270){ 
                            alfa = 300;
                            beta = alfa - sudut;
                }else if (sudut <= 300){ 
                            alfa = 315;
                            beta = alfa - sudut;
                }else if (sudut <= 315){ 
                            alfa = 330;
                            beta = alfa - sudut;
                }else if (sudut <= 330){ 
                            alfa = 360;
                            beta = alfa - sudut;
                }else {alfa = 0
                        beta=0;} 
                var sinAlfa = Math.sin((alfa) * Math.PI / 180);
                var sinBeta = Math.sin((beta) * Math.PI / 180);
                var cosAlfa = Math.cos((alfa) * Math.PI / 180);
                var cosBeta = Math.cos((beta) * Math.PI / 180);
                        operator= ' - ' ;        
                        keterangan='cos'
                        rumus2 = '('+'cos '+alfa+' * '+'cos  '+beta+' ) '+' - '+'( '+'sin  '+alfa+' * '+'sin '+beta+' ) ';
                        total= (cosAlfa * cosBeta) + (sinAlfa * sinBeta);
        } else if (op == "tan+tan") {
            if (sudut > 360){ 
                    alfa = 330;
                    beta = sudut - alfa;
                }else if (sudut > 330){ 
                    alfa = 315;
                    beta = sudut - alfa;
                }else if (sudut > 315){ 
                    alfa = 300;
                    beta = sudut - alfa;
                }else if (sudut > 300){ 
                    alfa = 270;
                    beta = sudut - alfa;
                }else if (sudut > 270){ 
                    alfa = 249;
                    beta = sudut - alfa;
                }else if (sudut > 240){ 
                    alfa = 225;
                    beta = sudut - alfa;
                }else if (sudut > 225){ 
                    alfa = 210;
                    beta = sudut - alfa;
                }else if (sudut > 210){ 
                    alfa = 180;
                    beta = sudut - alfa;
                }else if (sudut > 180){ 
                    alfa = 150;
                    beta = sudut - alfa;
                }else if (sudut > 150){ 
                    alfa = 135;
                    beta = sudut - alfa;
                }else if (sudut > 135){ 
                    alfa = 120;
                    beta = sudut - alfa;
                }else if (sudut > 120){ 
                    alfa = 90;
                    beta = sudut - alfa;
                }else if (sudut > 90){ 
                    alfa = 60;
                    beta = sudut - alfa;
                }else if(sudut > 60){
                    alfa = 45;
                    beta = sudut - alfa;
                 }else if(sudut > 45){
                    alfa = 30;
                    beta = sudut - alfa;
                 }else {
                    alfa = 0;
                     beta =0;
                 }
                var tanAlfa = Math.tan((alfa) * Math.PI / 180);
                var tanBeta = Math.tan((beta) * Math.PI / 180);
                 operator= ' + ' ;
                 keterangan='tan';
                 rumus2 = '('+'tan '+alfa+' + '+'tan  '+beta+' ) '+' / '+'( '+' 1 - '+'tan  '+alfa+'   '+'tan '+beta+' ) ';
                 total=(tanAlfa + tanBeta) / (1-(tanAlfa * tanBeta));
        } else if  (op == "tan-tan") {
            if(sudut <= 30){
                            alfa = 45;
                            beta = alfa - sudut;
                }else if (sudut <= 60){ 
                            alfa = 90;
                            beta = alfa - sudut;
                }else if (sudut <= 90){ 
                            alfa = 120;
                            beta = alfa - sudut;
                }else if (sudut <= 120){ 
                            alfa = 135;
                            beta = alfa - sudut;
                }else if (sudut <= 135){ 
                            alfa = 150;
                            beta = alfa - sudut;
                }else if (sudut <= 150){ 
                            alfa = 180;
                            beta = alfa - sudut;
                }else if (sudut <= 180){ 
                            alfa = 210;
                            beta = alfa - sudut;
                }else if (sudut <= 210){ 
                            alfa = 225;
                            beta = alfa - sudut;
                }else if (sudut <= 225){ 
                            alfa = 240;
                            beta = alfa - sudut;
                }else if (sudut <= 225){ 
                            alfa = 240;
                            beta = alfa - sudut;
                }else if (sudut <= 240){ 
                            alfa = 270;
                            beta = alfa - sudut;
                }else if (sudut <= 270){ 
                            alfa = 300;
                            beta = alfa - sudut;
                }else if (sudut <= 300){ 
                            alfa = 315;
                            beta = alfa - sudut;
                }else if (sudut <= 315){ 
                            alfa = 330;
                            beta = alfa - sudut;
                }else if (sudut <= 330){ 
                            alfa = 360;
                            beta = alfa - sudut;
                }else {alfa = 0
                        beta=0}
                        var tanAlfa = Math.tan((alfa) * Math.PI / 180);
                        var tanBeta = Math.tan((beta) * Math.PI / 180);
                        operator= '-' ;
                        keterangan='tan'
                        rumus2 = '('+'tan '+alfa+' + '+'tan  '+beta+' ) '+' / '+'( '+'1 + '+' tan  '+alfa+'   '+'tan '+beta+' ) ';
                        total =(tanAlfa - tanBeta) / (1+(tanAlfa * tanBeta));
        } else{
            alfa = 0
            beta = 0
            operator= 'error' ;
            keterangan='error';
        }
        // JANGAN DIHAPUS DLU YAA
        // if (sinalfa == 30 || sinalfa === 150) {
        //     sina = '1/2';
        // }else if(sinalfa === 210 || sinalfa === 330){
        //     sina ='-1/2'    
        // }else if(sinalfa == 45 || sinalfa === 135){
        //     sina ='1/2√2'    
        // }else if(sinalfa === 225 || sinalfa === 315){
        //     sina ='-1/2√2'    
        // }else if(sinalfa === 60 || sinalfa === 120){
        //     sina ='1/2√3'    
        // }else if(sinalfa === 90){
        //     sina ='1'    
        // }else if(sinalfa === 270){
        //     sina ='-1'    
        // }else{
        //     sina='0'
        // }

        // if (sinbeta == 30 || sinbeta === 150) {
        //     sinb = '1/2';
        // }else if(sinbeta === 210 || sinbeta === 330){
        //     sinb ='-1/2'    
        // }else if(sinbeta == 45 || sinbeta === 135){
        //     sinb ='1/2√2'    
        // }else if(sinbeta === 225 || sinbeta === 315){
        //     sinb ='-1/2√2'    
        // }else if(sinbeta === 60 || sinbeta === 120){
        //     sinb ='1/2√3'    
        // }else if(sinbeta === 90){
        //     sinb ='1'    
        // }else if(sinbeta === 270){
        //     sinb ='-1'    
        // }else{
        //     sinb='0'
        // }


        // if (cosalfa === 60 || cosalfa === 300) {
        //     cosa = '1/2';
        // }else if(cosalfa === 120 || cosalfa === 240){
        //     cosa ='-1/2'    
        // }else if(cosalfa == 45 || cosalfa === 315){
        //     cosa ='1/2√2'    
        // }else if(cosalfa === 135 || cosalfa === 225){
        //     cosa ='-1/2√2'    
        // }else if(cosalfa == 30 || cosalfa === 330){
        //     cosa ='1/2√3'    
        // }else if(cosalfa === 0 || cosalfa === 360){
        //     cosa ='1'    
        // }else if(cosalfa === 180){
        //     cosa ='-1'    
        // }else{
        //     cosa='0'
        // }

        // if (cosbeta === 60 || cosbeta === 300) {
        //     cosb = '1/2';
        // }else if(cosbeta === 120 || cosbeta === 240){
        //     cosb ='-1/2'    
        // }else if(cosbeta == 45 || cosbeta === 315){
        //     cosb ='1/2√2'    
        // }else if(cosbeta === 135 || cosbeta === 225){
        //     cosb ='-1/2√2'    
        // }else if(cosbeta == 30 || cosbeta === 330){
        //     cosb ='1/2√3'    
        // }else if(cosbeta === 0 || cosbeta === 360){
        //     cosb ='1'    
        // }else if(cosbeta === 180){
        //     cosb ='-1'    
        // }else{
        //     cosb='0'
        // }

        // if (tanalfa === '30' || tanalfa === 210) {
        //     tana = '1/3√3';
        // }else if(tanalfa === 150 || tanalfa === 330){
        //     tana ='-1/3√3'    
        // }else if(tanalfa === '45' || tanalfa === 25){
        //     tana ='1'    
        // }else if(tanalfa === 135 || tanalfa === 315){
        //     tana ='-1'    
        // }else if(tanalfa === 60 || tanalfa === 240){
        //     tana ='√3'
        // }else if(tanalfa === 120 || tanalfa === 300){
        //     tana ='-√3'    
        // }else if(tanalfa === 90){
        //     tana ='∞'    
        // }else if(tanalfa === 270){
        //     tana ='∞'    
        // }else{
        //     tana='0'
        // }

        // if (tanbeta === '30' || tanbeta === 210) {
        //     tanb = '1/3√3';
        // }else if(tanbeta === 150 || tanbeta === 330){
        //     tanb ='-1/3√3'    
        // }else if(tanbeta === '45' || tanbeta === 25){
        //     tanb ='1'    
        // }else if(tanbeta === 135 || tanbeta === 315){
        //     tanb ='-1'    
        // }else if(tanbeta === 60 || tanbeta === 240){
        //     tanb ='√3'
        // }else if(tanbeta === 120 || tanbeta === 300){
        //     tanb ='-√3'    
        // }else if(tanbeta === 90){
        //     tanb ='∞'    
        // }else if(tanbeta === 270){
        //     tanb ='∞'    
        // }else{
        //     tanb='0'
        // }
        
        rumus1=keterangan+sudut+'°'+'='+'('+alfa+'°'+operator +beta+'°'+')';
        penyelesaian1.value = rumus1;
        penyelesaian2.value = rumus2;
        hasils.value = total.toFixed(3);
        // penyelesaian3.value = rumus3;
        // penyelesaian4.value = rumus4;
       
        
    }
    

    }
</script>
</div>                           
</div>
</section>
@endsection
