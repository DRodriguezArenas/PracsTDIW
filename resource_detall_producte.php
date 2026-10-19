<?php // resource_detall_producte.php ?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Aurea - Detall de producte</title>
    <link rel="stylesheet" href="css/estils.css">
</head>
<body>

<header>
    <?php require __DIR__ . '/controller/menu_superior.php'; ?>
</header>

<!-- De moment és estàtic: a la sessió 3 el producte vindrà de la base de dades -->
<main>
    <h2>Anell amb aiguamarina</h2>

    <div class="detall">
        <img src="img/anells.svg" alt="Anell amb aiguamarina">

        <div>
            <p class="preu">89 €</p>
            <p><b>Material:</b> plata reciclada</p>
            <p>Anell fet a mà amb plata reciclada.</p>

            <form>
                <label for="quantitat">Quantitat:</label>
                <input type="number" id="quantitat" name="quantitat" value="1" min="1">
                <button type="submit" class="boto">Afegir a la cistella</button>
            </form>
        </div>
    </div>
</main>

<footer>
    <p>Aurea 2026 - Pràctica TDIW</p>
</footer>

</body>
</html>
