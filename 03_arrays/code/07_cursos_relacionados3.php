<?php

$course = "Curso profesional de PHP y Laravel";

/*$tags = [

    "PHP", //Indice ceoro 0

    "Laravel", //Indice 1

    "JAVASCRITP", // Indice 2

    "PYTHON",

    "HTML"

];*/

//Ejercicio.

$cursos =[

    "Curso de HTML",

    "Curso de PYTHON",

    "Curso de LARAVEL",

    "Curso de GITHUB"

];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--<title><?php echo $course ?></title>--> <!-- Forma 1 de hacerlo -->

    <title><?php echo $course ?></title> <!-- Forma limpia dehacerlo -->

    <style>

        body{

            margin: 0;

            height: 100vh;

            display: flex;

            justify-content: center;

            align-items: center;    

            background-color: #f0f0f0;

           

        }

        .container1 {

            width: 600px;

            height: 500px;

            background-color: burlywood;

            color: black;

            text-align: center;

            justify-content: center;

            align-items: center;

            font-size: 18px;

            border-radius: 8px;

        }

        .etiquetas{

            text-align: left;

            padding-left: 20px;

        }

        .etiquetass{

            text-align: left;

            padding-left: 20px;

        }

        .precio-fecha{

            display: flex;

            justify-content: space-around;

        }

        .precio{

            color: red;

        }

    </style>

</head>

<body >

    <div class="container1">

    <!--<h1>Bienvenido al <?php echo $course ?></h1>--> <!-- Forma 1 de hacerlo -->

    <h1>Bienvenido al <?= $course ?></h1> <!-- Forma limpia dehacerlo -->

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ea assumenda provident mollitia maiores distinctio esse, neque fugit id voluptate facilis, aperiam nihil obcaecati, veritatis accusamus enim eius inventore suscipit?</p><br><br>

<!-- Imprimimos -->

<!-- Primera forma -->

<!--<div class="etiquetas">

    <p class="etiquetass">

    <strong>Etiquetas: </strong>

        <?php

            foreach ($tags as $tag) {

                echo "<li>$tag</li>";

            }

        ?>

    </p>

</div>-->

<!-- Forma mas limpia -->

<!--<div class="etiquetas">

    <p class="etiquetass">

        <strong>Etiquetas: </strong>

        <ul>

            <?php foreach ($tags as $tag): ?>

                <li><?=$tag?></li>

            <?php endforeach; ?>

        </ul>

    </p>

</div>-->

<!-- Ejercicio -->

 <div class="etiquetas">

    <p class="etiquetass">

        <strong>Etiquetas: </strong>

        <ul>

            <?php foreach ($cursos as $curso): ?>

                <li><?=$curso?></li>

            <?php endforeach; ?>

        </ul>

    </p>

</div>

</body>

</html>