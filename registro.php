<!DOCTYPE html>
<html lang="cat">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registre Usuari</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h2>Registrar-se</h2>
                <p class="lead"></p>
            </div>
        <div class="col-md-12">
        <h4 class="mb-3">Dades d'usuari</h4>
        <form class="needs-validation" novalidate="">

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="titol">Username</label>
                <input type="text" maxlength="128" class="form-control" id="titol">
                <div class="invalid-feedback">
                    Requereix un username per a l'usuari.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="titol">Contraseña</label>
                <input type="password" maxlength="128" class="form-control" id="titol">
                <div class="invalid-feedback">
                    Requereix una contraseña.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="titol">Nom</label>
                <input type="text" maxlength="128" class="form-control" id="titol">
                <div class="invalid-feedback">
                    Requereix el nom de la persona.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="titol">Cognoms</label>
                <input type="text" maxlength="128" class="form-control" id="titol">
                <div class="invalid-feedback">
                    Requereix cognoms de la persona.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="titol">E-mail</label>
                <input type="text" maxlength="128" class="form-control" id="titol">
                <div class="invalid-feedback">
                    Requereix cognoms de la persona.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="titol">Sexe</label>
                <input type="text" maxlength="128" class="form-control" id="titol">
                <div class="invalid-feedback">
                    Requereix un sexe.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="titol">Data naixement</label>
                <input type="text" maxlength="128" class="form-control" id="titol">
                <div class="invalid-feedback">
                   Requereix una data de naixement.
                </div>
            </div>
        </div>


        <br>
        <button><a class="nav-link" href="index.php">Registrar-se</a></button>
        <br><br>    
    </body>
</html>