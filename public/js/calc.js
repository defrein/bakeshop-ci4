function calc_harga() {
    let metode = Array.from(document.getElementsByName("metode")).find(r => r.checked).value;
    let harga_pokok = parseInt(document.getElementById("harga-pokok").value);
    let keuntungan = parseInt(document.getElementById("keuntungan").value);
    let hasil_field = document.getElementById("hasil");

    hasil_calc = 0;
    if (metode == "markup") {
        hasil_calc = harga_pokok + ((keuntungan / 100) * harga_pokok);
        hasil_field.value = hasil_calc;
        console.log(hasil_calc)
    } else if (metode == "margin") {
        hasil_calc = harga_pokok / (1 - (keuntungan / 100));
        hasil_field.value = hasil_calc;
        console.log(hasil_calc);
    }
}

function reset_field() {

    document.getElementById("calc_form").reset();
}