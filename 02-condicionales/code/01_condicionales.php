<?php
$course ="Curso Profesional de PHP y Laravel";

$archived = true; //Puede ser tambien el valor false
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$course ?></title>
</head>

<body>
    <h1>Bienvenido <?=$course ?></h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis perspiciatis voluptate, omnis molestiae, tenetur aperiam corrupti, voluptates non nisi pariatur est inventore itaque dolores aliquam id libero quidem a cupiditate!</p>
    
    <?php
    //condicionales
if ($archived) {
    echo "<p style='color: redd;'>El curso esta archivado</p>";
} else {
    echo "<p style='color: green;'>El curso esta activo</p>";    
}
    ?>

</body>

</html>

