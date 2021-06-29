  function hitungs() {

    var angka1 = parseInt(document.getElementById("angka1").value);
    var angka2 = parseInt(document.getElementById("angka2").value);
   

    var op = document.getElementById("op").value;

    var hasils = document.getElementById("hasils");
   var sinAlfa = Math.sin((angka1) * Math.PI / 180);
   var sinBeta = Math.sin((angka2) * Math.PI / 180);
   var cosAlfa = Math.cos((angka1) * Math.PI / 180);
   var cosBeta = Math.cos((angka2) * Math.PI / 180);
   var tanAlfa = Math.tan((angka1) * Math.PI / 180);
   var tanBeta =  Math.tan((angka2) * Math.PI / 180);
   
    var total;

    if (isNaN(angka1) || isNaN(angka2) ) {
        alert('isi form dengan angka!')

    } else {

        if (op == "sin+sin") {
           var sinsin = (sinAlfa * cosBeta) + (cosAlfa * sinBeta);
           total = sinsin.toFixed(3);
        } else if (op == "sin-sin") {
            var sinmin = (sinAlfa * cosBeta) - (cosAlfa * sinBeta);
            total = sinmin.toFixed(3);
        } else if (op == "cos+cos") {
            var coscos = (cosAlfa * cosBeta) - (sinAlfa * sinBeta);
            total = coscos.toFixed(3);
        } else if  (op == "cos-cos") {
            var cosmin =  (cosAlfa * cosBeta) + (sinAlfa * sinBeta);
            total = cosmin.toFixed(3);
        } else if (op == "tan+tan") {
            var tantan = (tanAlfa + tanBeta) / (1-(tanAlfa * tanBeta));
            total = tantan.toFixed(3);
        } else if  (op == "tan-tan") {
            var tanmin = (tanAlfa - tanBeta) / (1+(tanAlfa * tanBeta));
            total = tanmin.toFixed(3);
        } 
        else{
            total = 0
        }
    }
    

    hasils.value = total;
    
}