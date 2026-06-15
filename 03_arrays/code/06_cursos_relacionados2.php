<?php
$course = "Curso Profesional de PHP y Laravel";

$tags = ["HTML", "CSS", "JavaScript", "Laravel", "PHP", "MYSQL"];
$cursos_relacionados = ["Curso de JavaScript", "Curso de HTML y CSS", "Curso de Python", 
                        "Curso de Java"];

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
        <strong>Etiquetas: </strong>
        <ul>
            <?php foreach($tags as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>
    </p>

    <p>
        <strong>Cursos relacionados: </strong>
        <ul>
            <?php foreach($cursos_relacionados as $curso): ?>
                <li><?= $curso ?></li>
            <?php endforeach; ?>
        </ul>
    </p>
</body>
</html>