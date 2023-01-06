<!DOCTYPE html>
<?php
  $producte_id = $_GET[id_producte] ?? NULL;
  $infoproducte = getInfoProductes($producte_id);

?>
<html lang=cat>
    <head>
        <meta charset = "UTF-8" />
        <title>Portada</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <h1>Productes</h1>
        <h3><?php echo $infoproducte['nom'] ?> </h3>
        <p><?php echo $infoproducte['descripcio'] ?> </p>
        <p><?php echo $infoproducte['imatge'] ?> </p>
        <p><?php echo $infoproducte['preu'] ?> </p>
        <input type="number"> 
        <input type="button" value="Afegir al cabas">

    </body>
</html>
