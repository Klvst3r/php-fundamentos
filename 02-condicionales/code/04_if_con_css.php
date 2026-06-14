<?php
$course = "Curso de PHP";
$level = "Básico";

$description = "Aprende a desarrollar aplicaciones web dinámicas con PHP. Desde la instalación del entorno hasta la creación de formularios y gestión de sesiones, construirás una app de registro y login aplicando buenas prácticas.";

$price = 29.99;
$publishDate = "11 de agosto de 2025";

$archived = false;

$status = $archived ? "archivado" : "activo";
$statusMessage = $archived
    ? "Este curso está archivado."
    : "Este curso está activo.";

$recommendation = match ($level) {
    "Básico" => "Recomendado para quienes recién comienzan en programación.",
    "Intermedio" => "Ideal para quienes ya conocen los fundamentos de PHP.",
    "Avanzado" => "Pensado para desarrolladores con experiencia previa.",
    default => "Nivel no definido."
};
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ?></title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            padding: 30px;
        }

        .container {
            width: 850px;
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
            text-align: center;
        }

        h1 {
            color: #2d3e50;
            font-size: 55px;
            margin-bottom: 10px;
        }

        .line {
            height: 4px;
            background: #4aa3df;
            width: 80%;
            margin: 20px auto;
        }

        .description {
            font-size: 1.6rem;
            line-height: 1.6;
            color: #555;
            margin: 30px 0;
        }

        .level-box {
            background: #e8f1f8;
            border-left: 6px solid #4aa3df;
            border-radius: 8px;
            padding: 20px;
            margin: 30px 0;
        }

        .level-box h2 {
            margin: 0;
            color: #2d3e50;
        }

        .level-box p {
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }

        .info {
            display: flex;
            justify-content: space-around;
            margin: 40px 0;
        }

        .info h3 {
            color: #999;
            font-weight: normal;
            margin-bottom: 10px;
        }

        .price {
            color: #d9534f;
            font-size: 2.5rem;
            font-weight: bold;
        }

        .date {
            color: #3cb371;
            font-size: 2rem;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            background: #4aa3df;
            color: white;
            text-decoration: none;
            padding: 15px 35px;
            border-radius: 40px;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .status {
            font-size: 1.3rem;
            color: <?= $archived ? '#d9534f' : '#333' ?>;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1><?= $course ?> - <?= $level ?></h1>

        <div class="line"></div>

        <p class="description">
            <?= $description ?>
        </p>

        <div class="level-box">
            <h2>Nivel: <?= $level ?></h2>
            <p><?= $recommendation ?></p>
        </div>

        <div class="info">
            <div>
                <h3>PRECIO</h3>
                <div class="price">$<?= number_format($price, 2) ?></div>
            </div>

            <div>
                <h3>FECHA DE PUBLICACIÓN</h3>
                <div class="date"><?= $publishDate ?></div>
            </div>
        </div>

        <?php if (!$archived): ?>
            <a href="#" class="btn">¡Inscríbete Ahora!</a>
        <?php endif; ?>

        <p class="status"><?= $statusMessage ?></p>

    </div>

</body>

</html>