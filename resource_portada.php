<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Aurea - Inici</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&family=Montserrat:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="css/estils.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/funcions.js"></script>
</head>
<body>

<header>
    <?php require __DIR__ . '/controladors/c_menu.php'; ?>
</header>

<section class="portada">
    <div class="portada-text">
        <p class="etiqueta">Joieria ètica · Fet a mà a Barcelona</p>
        <h1>Joies que brillen<br>per dins</h1>
        <p class="portada-descripcio">
            Peces artesanes de plata reciclada i or de comerç just,
            amb pedres d'origen traçable.
        </p>
        <a href="#col-leccions" class="boto">Descobreix la col·lecció</a>
        <a href="#compromis" class="boto boto-linia">El nostre compromís</a>
    </div>
    <img src="img/portada.svg" alt="Joies d'Aurea">
</section>

<div class="titol-seccio" id="col-leccions">
    <p class="etiqueta">Botiga</p>
    <h2>Les nostres col·leccions</h2>
</div>

<?php require __DIR__ . '/controladors/c_categories.php'; ?>

<section class="valors" id="compromis">
    <div>
        <h3>Plata reciclada</h3>
        <p>Els nostres metalls provenen de joies i residus electrònics recuperats.</p>
    </div>
    <div>
        <h3>Comerç just</h3>
        <p>Paguem un preu digne a les cooperatives mineres i als artesans.</p>
    </div>
    <div>
        <h3>Fet a mà</h3>
        <p>Cada peça es fa al nostre taller, una a una.</p>
    </div>
</section>

<footer>
    <span class="peu-logo">AUREA</span>
    <span>Joieria ètica feta a mà</span>
    <span>© 2026 Aurea · Pràctica TDIW</span>
</footer>

</body>
</html>
