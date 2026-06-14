<?php

// =========================
// CONFIGURACIÓN DE NIVELES
// =========================

$levels = [

    'basic' => [
        'name' => 'Básico',
        'message' => 'Recomendado para quienes recién comienzan en programación.',
        'bg' => '#eaf4fc',
        'border' => '#3498db',
        'topics' => [
            'HTML',
            'CSS',
            'PHP Básico'
        ]
    ],

    'intermediate' => [
        'name' => 'Intermedio',
        'message' => 'Recomendado para estudiantes que tienen conocimientos básicos de programación.',
        'bg' => '#f5ede0',
        'border' => '#f39c3d',
        'topics' => [
            'POO',
            'Formularios',
            'MySQL'
        ]
    ],

    'advanced' => [
        'name' => 'Avanzado',
        'message' => 'Ideal para estudiantes con conocimientos sólidos de programación.',
        'bg' => '#f6e5e7',
        'border' => '#d9534f',
        'topics' => [
            'Laravel',
            'APIs REST',
            'Patrones de Diseño'
        ]
    ]
];

// =========================
// NIVEL SELECCIONADO
// =========================

$selectedLevel = $_GET['level'] ?? 'basic';

$courseData = $levels[$selectedLevel];

// =========================
// DATOS DEL CURSO
// =========================

$course = "Curso Profesional de PHP";

$description = "Aprende a desarrollar aplicaciones web dinámicas con PHP. Desde la instalación del entorno hasta la creación de formularios y gestión de sesiones, construirás una aplicación completa aplicando buenas prácticas.";

$price = 29.99;

$publishDate = "11 de agosto de 2025";

$archived = false;

$status = $archived ? "archivado" : "activo";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ?></title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, Helvetica, sans-serif;
            background:#f4f4f4;
            padding:30px;
        }

        .container{
            max-width:900px;
            margin:auto;
            background:white;
            padding:40px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.1);
            text-align:center;
        }

        h1{
            color:#2d3e50;
            font-size:55px;
            margin-bottom:20px;
        }

        .line{
            height:4px;
            background:#3498db;
            width:90%;
            margin:20px auto;
        }

        form{
            margin:20px 0;
        }

        select{
            padding:5px;
            font-size:16px;
        }

        .description{
            font-size:20px;
            line-height:1.8;
            color:#555;
            margin:30px 0;
        }

        .topics{
            margin:30px 0;
        }

        .topics h3{
            color:#2d3e50;
            margin-bottom:15px;
        }

        .topics ul{
            list-style:none;
            display:flex;
            justify-content:center;
            flex-wrap:wrap;
            gap:10px;
        }

        .topics li{
            background:#3498db;
            color:white;
            padding:10px 18px;
            border-radius:20px;
            font-weight:bold;
        }

        .level-box{
            padding:25px;
            border-radius:8px;
            margin:40px 0;
        }

        .level-box h2{
            color:#2d3e50;
            margin-bottom:10px;
        }

        .level-box p{
            font-size:18px;
            font-weight:bold;
            color:#2d3e50;
        }

        .info{
            display:flex;
            justify-content:center;
            gap:100px;
            margin:40px 0;
        }

        .info h3{
            color:#999;
            margin-bottom:15px;
        }

        .price{
            color:#d9534f;
            font-size:40px;
            font-weight:bold;
        }

        .date{
            color:#45b36b;
            font-size:35px;
            font-weight:bold;
        }

        .btn{
            display:inline-block;
            text-decoration:none;
            background:#3498db;
            color:white;
            padding:15px 30px;
            border-radius:40px;
            font-size:24px;
            font-weight:bold;
            margin-top:20px;
        }

        .status{
            margin-top:25px;
            font-size:22px;
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

            <option
                value="basic"
                <?= $selectedLevel === 'basic' ? 'selected' : '' ?>>
                Básico
            </option>

            <option
                value="intermediate"
                <?= $selectedLevel === 'intermediate' ? 'selected' : '' ?>>
                Intermedio
            </option>

            <option
                value="advanced"
                <?= $selectedLevel === 'advanced' ? 'selected' : '' ?>>
                Avanzado
            </option>

        </select>

    </form>

    <p class="description">
        <?= $description ?>
    </p>

    <div class="topics">

        <h3>Tecnologías que aprenderás</h3>

        <ul>

            <?php foreach ($courseData['topics'] as $topic): ?>

                <li><?= $topic ?></li>

            <?php endforeach; ?>

        </ul>

    </div>

    <div
        class="level-box"
        style="
            background: <?= $courseData['bg'] ?>;
            border-left: 6px solid <?= $courseData['border'] ?>;
        "
    >

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

    <?php if(!$archived): ?>

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