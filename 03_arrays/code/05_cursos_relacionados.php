<?php
$course = "PHP Professional - Conditionals and Match Expressions";
$price = 99.99;
$published_at = "2025-06-17";
$archived = true;

$tags = ["PHP", "Laravel", "CSS", "HTML", "JavaScript"];

$more_courses = [
    "PHP Professional - Advanced Techniques",
    "Laravel for Beginners",
    "CSS Mastery",
    "HTML5 Essentials",
    "JavaScript Deep Dive",
    "Full Stack Web Development",
    "Web Design Fundamentals",
    "Database Management with MySQL",
    "API Development with PHP",
    "Frontend Frameworks Overview",
    "Backend Development with Node.js",
    "Responsive Web Design",
    "Version Control with Git",
    "Web Security Best Practices",
    "Testing and Debugging in PHP",
    "Building RESTful APIs",
];

$level = 2; // 1: Beginner, 2: Intermediate, 3: Advanced

$level_message = ($level === 1 ? "$course - for Beginner, perfect for those starting out with PHP development." : ($level == 2 ? "$course - for Intermediate, ideal for developers with some experience in PHP." : ($level == 3 ? "$course - for Advanced, designed for seasoned PHP developers looking to deepen their expertise." :
            "PHP Profesional - Unknown Level")));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $course ?></title>
</head>

<body style="color:blanchedalmond ;  background: radial-gradient(circle, rgba(63, 94, 251, 1) 0%, rgba(30, 9, 31, 0.93) 100%); margin: 0;padding: 0;height: 100vh;">
    <h2> <?= $course ?></h2>
    <p><?= $level_message ?></p>
    <p>Get offer <span style="text-decoration: underline;">Price: $<?= $price ?></span></p>

    <p>Publication date: <?= $published_at ?></p>

    <H2>Introduction to <?= $course ?></H2>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, earum unde cupiditate placeat quidem vero et, quaerat necessitatibus
        laboriosam asperiores, enim ullam explicabo illo voluptas atque, molestias blanditiis dolore aperiam.</p>

    <strong>
        TAGS
    </strong>

    <?php foreach ($tags as $tag): ?>
        <li><?= $tag ?></li>
    <?PHP endforeach; ?>
    </br>
    <strong>
        == DISCOVER MORE COURSES ==
    </strong>
    <ul>
        <?php foreach ($more_courses as $course): ?>
            <li>
                <a href="#" target="_blank" style="color:azure"><?= $course ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>