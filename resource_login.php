<?php // resource_login.php ?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Aurea - Entra</title>
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

        <label for="email">Correu electrònic:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contrasenya:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="boto">Entrar</button>
    </form>
</main>

<footer>
    <p>Aurea 2026 - Pràctica TDIW</p>
</footer>

</body>
</html>
