<?php

$course = "Curso profesional de PHP y Laravel";

?>

<?php

$precio = 250;

$fecha_publicacion = "2025-11-16";

?>

<?php

$calida = "Alta";

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $course ?></title>

</head>

<body>

    <h1>Bienvenido al <?= $course ?></h1>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus sed eius, neque soluta voluptatibus odio similique nulla nisi perferendis, autem doloribus amet quos assumenda culpa labore natus! Fugiat, cumque tempore!</p>

    <p>El precio es: <?php echo $precio; ?></p>

    <p>Fecha de publicacion: <?php echo $fecha_publicacion; ?></p>

    <p>Calidad: <?php echo $calida; ?></p>

</body>

</html>