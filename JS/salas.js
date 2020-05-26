function crearSala() {
    alert("crea");
    var codigoSala = get_rand_alphanumeric(10);
    document.getElementById("codigoSala").innerHTML =
        '<div> <h2> Código de sala: </h2>' +
        '<p id="cood" code="' + codigoSala + '">' +
        codigoSala +
        '</p><button onclick="ConfirmarSala()">Confirmar creación de Sala</button></div>';

}

function unirseASala() {
    alert("unir");
    document.getElementById("codigoSala").innerHTML =
        '<div><label>Introduce el código de sala<input type="text" id="Name" name="Name"/></label><button>Unirse</button></div>';

}

function ConfirmarSala() {
    var mises = document.getElementById("sess").getAttribute("class");
    var codigo = document.getElementById("cood").getAttribute("code");
    var datacode = [
        { code: codigo, user: mises },
    ];
    axios.post('./crearSala.php', datacode)
        .then(response => {
            this.todos = response.data
            console.log(this.todos);
        })
        .catch(error => console.error(error))
}

function get_rand_alphanumeric(length) {
    rand_id = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
    console.log(rand_id);
    return rand_id;
}