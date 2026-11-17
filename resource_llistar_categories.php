<?php // resource_llistar_categories.php ?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Aurea - Col·leccions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&family=Montserrat:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="css/estils.css?v=<?php echo filemtime(__DIR__ . '/css/estils.css'); ?>">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/menu.js?v=<?php echo filemtime(__DIR__ . '/js/menu.js'); ?>" defer></script>
    <script src="js/categories.js?v=<?php echo filemtime(__DIR__ . '/js/categories.js'); ?>" defer></script>
</head>
<body>

<header>
    <?php require __DIR__ . '/controller/menu_superior.php'; ?>
</header>

<div class="titol-seccio titol-pagina">
    <p class="titol-etiqueta">Botiga</p>
    <h2>Les nostres col·leccions</h2>
    <p>Tria una categoria per veure les seves peces</p>
</div>

<?php require __DIR__ . '/controller/llistar_categories.php'; ?>

<footer>
    <?php require __DIR__ . '/controller/peu.php'; ?>
</footer>

</body>
</html>
