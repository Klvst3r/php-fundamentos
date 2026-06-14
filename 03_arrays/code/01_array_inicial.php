<?php
$course = "Curso Profesional de PHP y Laravel";

$tags = ["HTML", "CSS", "JavaScript", "Laravel"];

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

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Omnis atque, explicabo repudiandae sint quisquam, 
        eveniet perferendis mollitia dignissimos rerum eum sunt nobis 
        repellat numquam iste. Quaerat porro facilis voluptatem cupiditate.</p>

    <p>
        <strong>Temas: </strong>
        <ul>
            <li><?= $tags[1]?></li>
            <li><?= $tags[3]?></li>
        </ul>
    </p>
</body>
</html>