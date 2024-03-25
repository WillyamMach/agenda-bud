function somenteNumeros(valor) {
    var caractere = /[^0-9-() $]/;
    var caractereInput = valor;
    if (caractere.test(caractereInput.value)) {
        caractereInput.value = "";
    }
}

