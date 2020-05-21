function crearSala() {
    alert("crea");
    var codigoSala = get_rand_alphanumeric(10);
    document.getElementById("codigoSala").innerHTML =
        '<div> <h2> Código de sala: </h2>' +
        '<p>' +
        codigoSala +
        '</p><button>Confirmar creación de Sala</button></div>';

}

function unirseASala() {
    alert("unir");
    document.getElementById("codigoSala").innerHTML =
        '<div><label>Introduce el código de sala<input type="text" id="Name" name="Name"/></label><button>Unirse</button></div>';

}

function get_rand_alphanumeric(length) {
    rand_id = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
    console.log(rand_id);
    return rand_id;
    r
}