<?php // resource_registre.php ?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Aurea - Registre</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&family=Montserrat:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="css/estils.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/menu.js" defer></script>
</head>
<body>

<header>
    <?php require __DIR__ . '/controller/menu_superior.php'; ?>
</header>

<main>
    <?php require __DIR__ . '/controller/registre.php'; ?>
</main>

<footer>
    <?php require __DIR__ . '/controller/peu.php'; ?>
</footer>

</body>
</html>
