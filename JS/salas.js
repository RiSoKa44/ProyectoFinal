function crearSala() {
    var codigoSala = get_rand_alphanumeric(10);
    document.getElementById("laSala").innerHTML =
        '<div> <h2> Código de sala: </h2>' +
        '<p id="cood" class="cood" code="' + codigoSala + '">' +
        codigoSala +
        '</p>' +
        '<button onclick="confirmarSala()">Confirmar creación de Sala</button></div>';

}

function unirseASala() {
    alert("unir");
    document.getElementById("laSala").innerHTML =
        '<div><label id="labCod">Introduce el código de sala<input type="text" id="codSala" name="Name"/></label><button onclick="confirmarUnion()">Unirse</button></div>';
}

function confirmarUnion() {
    var codigoSalaUnion = document.getElementById("codSala").value;
    var todos;
    var someData = [
        { codigo: codigoSalaUnion },
    ];
    axios.post('./unirseSala.php', someData)
        .then(response => {
            this.todos = response.data
            document.getElementById("laSala").innerHTML = (response.data);
        })
        .catch(error => console.error(error))
}

function confirmarSala() {
    alert("confirmamos");
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

function mostrarMiSala() {
    var todos;
    axios.get('./mostrarSala.php')
        .then(response => {
            this.todos = response.data
            document.getElementById("laSala").innerHTML = (response.data);
        })
        .catch(error => console.error(error))


}