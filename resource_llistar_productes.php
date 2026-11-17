<?php // resource_llistar_productes.php ?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Aurea - Productes</title>
    <link rel="stylesheet" href="css/estils.css">
</head>
<body>

<header>
    <?php require __DIR__ . '/controller/menu_superior.php'; ?>
</header>

<!-- De moment és estàtic: a la sessió 3 els productes vindran de la base de dades -->
<main>
    <h2>Anells</h2>

    <div class="productes">

        <div class="caixa">
            <a href="index.php?accio=detall-producte"><img src="img/anells.svg" alt="Anell de plata"></a>
            <h3>Anell de plata</h3>
            <p>45 €</p>
        </div>

        <div class="caixa">
            <a href="index.php?accio=detall-producte"><img src="img/anells.svg" alt="Anell amb aiguamarina"></a>
            <h3>Anell amb aiguamarina</h3>
            <p>89 €</p>
        </div>

        <div class="caixa">
            <a href="index.php?accio=detall-producte"><img src="img/anells.svg" alt="Aliança d'or"></a>
            <h3>Aliança d'or</h3>
            <p>349 €</p>
        </div>

        <div class="caixa">
            <a href="index.php?accio=detall-producte"><img src="img/anells.svg" alt="Anell amb robí"></a>
            <h3>Anell amb robí</h3>
            <p>120 €</p>
        </div>
    </div>
</main>

<footer>
    <p>Aurea 2026 - Pràctica TDIW</p>
</footer>

</body>
</html>
