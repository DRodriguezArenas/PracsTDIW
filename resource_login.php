<?php // resource_login.php ?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Aurea - Entra</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&family=Montserrat:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="css/estils.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/menu.js" defer></script>
</head>
<body>

<header>
    <?php require __DIR__ . '/controller/menu_superior.php'; ?>
</header>

<main>
    <form class="formulari">
        <h2>Iniciar sessió</h2>
        <p class="formulari-subtitol">Benvingut/da de nou a Aurea</p>

        <label for="email">Correu electrònic</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contrasenya</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="boto">Entrar</button>

        <p class="formulari-peu">No tens compte? <a href="index.php?accio=registre">Registra't</a></p>
    </form>
</main>

<footer>
    <?php require __DIR__ . '/controller/peu.php'; ?>
</footer>

</body>
</html>
