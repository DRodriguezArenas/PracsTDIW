<?php // resource_portada.php ?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Aurea - Inici</title>
    <link rel="stylesheet" href="css/estils.css">
</head>
<body>

<header>
    <?php require __DIR__ . '/controller/menu_superior.php'; ?>
</header>

<section class="portada">
    <img src="img/diamant.svg" alt="Diamant">
    <h1>Aurea</h1>
    <p>L'or que brilla per dins</p>
    <a href="index.php?accio=llistar-categories" class="boto">Veure col·lecció</a>
</section>

<?php require __DIR__ . '/controller/llistar_categories.php'; ?>

<footer>
    <p>Aurea 2026 - Pràctica TDIW</p>
</footer>

</body>
</html>
