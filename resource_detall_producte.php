<?php
// resource_detall_producte.php
// - Amb &fragment=1 (crida FETCH): només retorna el fragment amb el detall.
// - Sense (enllaç obert directament): mostra la pàgina del producte sencera.

if (isset($_GET['fragment'])) {
    require __DIR__ . '/controller/detall_producte.php';
    return;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Aurea - Producte</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&family=Montserrat:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="css/estils.css?v=<?php echo filemtime(__DIR__ . '/css/estils.css'); ?>">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/menu.js?v=<?php echo filemtime(__DIR__ . '/js/menu.js'); ?>" defer></script>
    <script src="js/categories.js?v=<?php echo filemtime(__DIR__ . '/js/categories.js'); ?>" defer></script>
</head>
<body class="veient-producte">

<header>
    <?php require __DIR__ . '/controller/menu_superior.php'; ?>
</header>

<section id="detall-producte">
    <?php require __DIR__ . '/controller/detall_producte.php'; ?>
</section>

<footer>
    <?php require __DIR__ . '/controller/peu.php'; ?>
</footer>

</body>
</html>
