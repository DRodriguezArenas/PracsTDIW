<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Aurea - Col·leccions</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&family=Montserrat:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="css/estils.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/funcions.js"></script>
</head>
<body>

<header>
    <?php require __DIR__ . '/controladors/c_menu.php'; ?>
</header>

<div class="titol-seccio">
    <p class="etiqueta">Botiga</p>
    <h2>Les nostres col·leccions</h2>
    <p>Tria una categoria per veure les seves peces</p>
</div>

<?php require __DIR__ . '/controladors/c_categories.php'; ?>

<footer>
    <span class="peu-logo">AUREA</span>
    <span>Joieria ètica feta a mà</span>
    <span>© 2026 Aurea · Pràctica TDIW</span>
</footer>

</body>
</html>
