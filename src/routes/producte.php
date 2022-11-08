<!DOCTYPE html>
<?php
  $categoria = $_GET[id_categoria] ?? NULL;
  productes = getProductes($categoria);

?>
<html lang=cat>
    <head>
        <meta charset = "UTF-8" />
        <title>Portada</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <h1>Productes</h1>
        <ul>
            <?php foreach ($productes as $producte) { ?>
                <li><a href="index.php?accio=llistar-productes&producte=<?php echo $producte; ?>"><?php echo $producte; ?></a></li>
            <?php } ?>
    </body>
</html>
