<?php
$course = [
    'title' => 'Curso Profesional de PHP y Laravel',
    'subtitle' => 'Aprende PHP y Laravel desde Cero',
    'description' => 'En este curso vas a aprender desde cero PHP y Laravel, dos de los frameworks más populares para el desarrollo web.',
    'tags' =>["HTML", "CSS", "PHP", "Laravel"]
];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course['title'] ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course['title'] ?></h1>

    <h2><?= $course['subtitle'] ?></h2>

    <p><?= $course['description'] ?></p>

    <p>
        <strong>Temas: </strong>
        <ul>
            <?php foreach ($course['tags'] as $tag) {
                echo "<li>$tag</li>";
              } ?>
        </ul>



    </p>
</body>
</html>