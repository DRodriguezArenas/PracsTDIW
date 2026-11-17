<?php // resource_llistar_categories.php ?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Aurea - Categories</title>
    <link rel="stylesheet" href="css/estils.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/menu.js" defer></script>
    <script src="js/categories.js" defer></script>
</head>
<body>

<header>
    <?php require __DIR__ . '/controller/menu_superior.php'; ?>
</header>

<main>
    <h2>Categories</h2>
</main>

<?php require __DIR__ . '/controller/llistar_categories.php'; ?>

<footer>
    <p>Aurea 2026 - Pràctica TDIW</p>
</footer>

</body>
</html>
