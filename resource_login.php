<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Aurea - Entra</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&family=Montserrat:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="css/estils.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/funcions.js"></script>
</head>
<body>

<header>
    <?php require __DIR__ . '/controladors/c_menu.php'; ?>
</header>

<main>
    <!-- De moment no és funcional: l'inici de sessió es fa a la sessió 4 -->
    <form class="formulari">
        <h2>Iniciar sessió</h2>

        <label for="email">Correu electrònic</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contrasenya</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="boto">Entrar</button>

        <p class="formulari-peu">No tens compte? <a href="index.php?accio=registre">Registra't</a></p>
    </form>
</main>

<footer>
    <span class="peu-logo">AUREA</span>
    <span>Joieria ètica feta a mà</span>
    <span>© 2026 Aurea · Pràctica TDIW</span>
</footer>

</body>
</html>
