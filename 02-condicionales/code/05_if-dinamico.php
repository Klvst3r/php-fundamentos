<?php

$levels = [

    'basic' => [
        'name' => 'Básico',
        'message' => 'Recomendado para quienes recién comienzan en programación.',
        'bg' => '#eaf4fc',
        'border' => '#3498db'
    ],

    'intermediate' => [
        'name' => 'Intermedio',
        'message' => 'Recomendado para estudiantes que tienen conocimientos básicos de programación.',
        'bg' => '#f5ede0',
        'border' => '#f39c3d'
    ],

    'advanced' => [
        'name' => 'Avanzado',
        'message' => 'Este curso es ideal para estudiantes con conocimientos sólidos de programación.',
        'bg' => '#f6e5e7',
        'border' => '#d9534f'
    ]
];

$selectedLevel = $_GET['level'] ?? 'basic';

$course = "Curso de PHP";

$description = "Aprende a desarrollar aplicaciones web dinámicas con PHP. Desde la instalación del entorno hasta la creación de formularios y gestión de sesiones, construirás una app de registro y login aplicando buenas prácticas.";

$price = 29.99;

$publishDate = "11 de agosto de 2025";

$archived = false;

$status = $archived ? "archivado" : "activo";

$courseData = $levels[$selectedLevel];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ?></title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            padding: 30px;
        }

        .container {
            width: 900px;
            background: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            text-align: center;
        }

        h1 {
            color: #2d3e50;
            font-size: 60px;
            margin-bottom: 20px;
        }

        .line {
            height: 4px;
            background: #3498db;
            width: 95%;
            margin: 20px auto;
        }

        form {
            margin: 20px 0 40px;
        }

        select {
            padding: 5px;
            font-size: 16px;
        }

        .description {
            color: #555;
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 40px;
        }

        .level-box {
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 40px;
        }

        .level-box h2 {
            color: #2d3e50;
            margin-bottom: 10px;
        }

        .level-box p {
            color: #2d3e50;
            font-size: 18px;
            font-weight: bold;
        }

        .info {
            display: flex;
            justify-content: center;
            gap: 120px;
            margin: 40px 0;
        }

        .info h3 {
            color: #999;
            margin-bottom: 15px;
            font-weight: normal;
        }

        .price {
            color: #d9534f;
            font-size: 48px;
            font-weight: bold;
        }

        .date {
            color: #45b36b;
            font-size: 42px;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            background: #3498db;
            color: white;
            text-decoration: none;
            padding: 18px 35px;
            border-radius: 40px;
            font-size: 28px;
            font-weight: bold;
            margin: 20px 0;
        }

        .status {
            margin-top: 20px;
            font-size: 24px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>
            <?= $course ?> - <?= $courseData['name'] ?>
        </h1>

        <div class="line"></div>

        <form method="GET">

            <label for="level">
                Selecciona el nivel del curso:
            </label>

            <select
                name="level"
                id="level"
                onchange="this.form.submit()">

                <option value="basic"
                    <?= $selectedLevel === 'basic' ? 'selected' : '' ?>>
                    Básico
                </option>

                <option value="intermediate"
                    <?= $selectedLevel === 'intermediate' ? 'selected' : '' ?>>
                    Intermedio
                </option>

                <option value="advanced"
                    <?= $selectedLevel === 'advanced' ? 'selected' : '' ?>>
                    Avanzado
                </option>

            </select>

        </form>

        <p class="description">
            <?= $description ?>
        </p>

        <div
            class="level-box"
            style="
                background: <?= $courseData['bg'] ?>;
                border-left: 6px solid <?= $courseData['border'] ?>;
            ">

            <h2>
                Nivel: <?= $courseData['name'] ?>
            </h2>

            <p>
                <?= $courseData['message'] ?>
            </p>

        </div>

        <div class="info">

            <div>
                <h3>PRECIO</h3>
                <div class="price">
                    $<?= number_format($price, 2) ?>
                </div>
            </div>

            <div>
                <h3>FECHA DE PUBLICACIÓN</h3>
                <div class="date">
                    <?= $publishDate ?>
                </div>
            </div>

        </div>

        <?php if (!$archived): ?>

            <a href="#" class="btn">
                ¡Inscríbete Ahora!
            </a>

        <?php endif; ?>

        <p class="status">
            Este curso está <?= $status ?>.
        </p>

    </div>

</body>

</html>