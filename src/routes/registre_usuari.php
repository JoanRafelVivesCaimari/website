<!DOCTYPE html>
<html lang=cat>
    <head>
        <meta charset = "UTF-8" />
        <title>Registre Usuari</title>
        <link rel="stylesheet" href="css/style.css" />
        <script src="./src/js/validar_dades.js"></script>
    </head>
    <body>
        <div id="registre">
            <form action="/index.php?accio=guardar-registre" method="POST" onsubmit="return validar_dades()">
                Nombre <br />
                <input type="text" name="nom" placeholder="Lucas" required/><br /><br />
                Email <br />
                <input type="email" name="mail" placeholder="lucas@brouston.top" required/><br /><br />
                Contraseña <br />
                <input type="password" name="contraseña" placeholder="************" required/><br /><br />
                Dirección <br />
                <input type="text" id="direccioID" name="direccion" placeholder="Calle del texico Bj 3" required/><br /><br />
                Localidad <br />
                <input type="text" id="localidadID" name="localidad" placeholder="Broustolandia" required/><br /><br />
                Código Postal <br />
                <input type="number" id="codigo_postalID" name="codigo_postal" placeholder="08470" required/><br /><br />
                <input type="submit" value="Regístra't" />
            </form>
        </div>
    </body>
</html>