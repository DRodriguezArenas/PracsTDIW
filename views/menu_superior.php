<!-- views/menu_superior.php -->
<a href="index.php" class="logo">AUREA</a>

<nav>
    <a href="index.php">Inici</a>
    <a href="index.php?accio=llistar-categories">Categories</a>
    <a href="index.php?accio=registre">Registre</a>

    <div class="menu-usuari">
        <button type="button" class="boto-usuari">El meu compte ▾</button>

        <ul class="desplegable">
            <?php if ($usuariIdentificat): ?>
                <li><a href="index.php?accio=compte">El meu compte</a></li>
                <li><a href="index.php?accio=compres">Les meves compres</a></li>
                <li><a href="index.php?accio=logout">Tancar sessió</a></li>
            <?php else: ?>
                <li><a href="index.php?accio=login">Iniciar sessió</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
