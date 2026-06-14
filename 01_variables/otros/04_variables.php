<?php

$course = "Curso Profesional de PHP y Laravel"; //1,true,1.5

$precio = "$10 mxn";

$fecha = "3 abril";

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=$course?></title>

</head>

<body>

    <h1>Bienvenido al <?=$course?></h1>

    <p>Lorem, ipsum dolor.</p>

    <form action="#" method="post">

        <div>

            <label for="precio">$Precio</label>

            <input type="number" name="precio" id="precio" min ="18" max="70">

        </div>

        <div>

            <label for="fecha">$fecha</label>

            <input type="date" id="fecha" name="fecha">

        </div>

    </form>

</body>

</html>