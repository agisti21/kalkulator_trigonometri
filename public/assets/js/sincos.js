function hitung() {

    var depan = parseInt(document.getElementById("depan").value);
    var samping = parseInt(document.getElementById("samping").value);
    var miring = parseInt(document.getElementById("miring").value);

    var op = document.getElementById("op").value;

    var hasil = document.getElementById("hasil");
    var penyelesaian = document.getElementById("penyelesaian");


    var total;

    if (isNaN(depan) || isNaN(samping) || isNaN(miring)) {
        alert('isi form dengan angka!')

    } else {

        if (op == "sin") {
            rumus = "Depan / Miring";
            total = depan +  '/' + miring;
        } else if (op == "cos") {
            rumus = "Samping / Miring";
            total = samping  +  '/' + miring;
        } else if (op == "tan") {
            rumus = "Depan / Samping";
            total = depan +  '/' + samping;
        } else if (op == "cosec") {
            rumus = "Miring / Depan";
            total = miring +  '/' + depan;
        } else if (op == "secan") {
            rumus = "Miring / Samping";
            total = miring +  '/' + samping;
        } else {
            rumus = "Samping / Depan";
            total = samping +  '/' + depan;
        }
    }

    penyelesain.value = rumus;
    hasil.value = total;
}