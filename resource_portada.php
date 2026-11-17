<?php // resource_portada.php ?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aurea - Inici</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&family=Montserrat:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="css/estils.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/menu.js" defer></script>
    <script src="js/categories.js" defer></script>
</head>
<body>

<header>
    <?php require __DIR__ . '/controller/menu_superior.php'; ?>
</header>

<section class="portada">
    <img src="img/diamant.svg" alt="">
    <h1>Aurea</h1>
    <p>L'or que brilla per dins</p>
    <a href="#col-leccions" class="boto">Veure col·lecció</a>
</section>

<div class="titol-seccio" id="col-leccions">
    <h2>Col·leccions</h2>
    <p>Tria una categoria per veure les seves joies</p>
</div>

<?php require __DIR__ . '/controller/llistar_categories.php'; ?>

<section class="valors">
    <div>
        <h3>Plata reciclada</h3>
        <p>Tots els nostres metalls provenen de joies i residus electrònics recuperats.</p>
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
    <?php require __DIR__ . '/controller/peu.php'; ?>
</footer>

</body>
</html>
