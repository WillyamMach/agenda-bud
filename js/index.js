function somenteNumeros(valor) {
    //caracteres aceitos /0-9-() /
    var caractere = /[^0-9-() $]/;
    var caractereInput = valor;
    if (caractere.test(caractereInput.value)) {
        caractereInput.value = "";
    }
}

function mascara(telefone){ 
    if(telefone.value.length == 0) {
        telefone.value += '(';
    }

    if(telefone.value.length == 3) {
        telefone.value += ') ';
    }

    if(telefone.value.length == 10) {
        telefone.value += '-';
    }
}