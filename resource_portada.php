<?php // resource_portada.php ?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
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
    <div class="portada-text">
        <p class="portada-etiqueta">Joieria ètica · Fet a mà a Barcelona</p>
        <h1>Joies que brillen<br>per dins</h1>
        <p class="portada-descripcio">
            Peces artesanes de plata reciclada i or de comerç just,
            amb pedres d'origen traçable. Belles per fora, justes per dins.
        </p>
        <div class="portada-botons">
            <a href="#col-leccions" class="boto">Descobreix la col·lecció</a>
            <a href="#compromis" class="boto boto-linia">El nostre compromís</a>
        </div>
    </div>
    <div class="portada-imatge">
        <img src="img/portada.svg" alt="Collaret, anell i arracada d'Aurea">
    </div>
</section>

<div class="titol-seccio" id="col-leccions">
    <p class="titol-etiqueta">Botiga</p>
    <h2>Les nostres col·leccions</h2>
</div>

<?php require __DIR__ . '/controller/llistar_categories.php'; ?>

<section class="valors" id="compromis">
    <div class="valor">
        <svg viewBox="0 0 24 24" width="34" height="34" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M4 12a8 8 0 0 1 14-5.3M20 12a8 8 0 0 1-14 5.3"/><path d="M18 3v4h-4M6 21v-4h4"/></svg>
        <h3>Plata reciclada</h3>
        <p>Els nostres metalls provenen de joies i residus electrònics recuperats.</p>
    </div>
    <div class="valor">
        <svg viewBox="0 0 24 24" width="34" height="34" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M12 21s-7-4.5-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 5.5-7 10-7 10z"/></svg>
        <h3>Comerç just</h3>
        <p>Paguem un preu digne a les cooperatives mineres i als artesans.</p>
    </div>
    <div class="valor">
        <svg viewBox="0 0 24 24" width="34" height="34" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M6 3h12l3 6-9 12L3 9z"/><path d="M3 9h18M9 3l3 18 3-18"/></svg>
        <h3>Fet a mà</h3>
        <p>Cada peça es fa al nostre taller, una a una, i ve amb 2 anys de garantia.</p>
    </div>
</section>

<footer>
    <?php require __DIR__ . '/controller/peu.php'; ?>
</footer>

</body>
</html>
