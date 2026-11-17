<!-- vistes/v_menu.php -->
<a href="index.php" class="logo">AUREA</a>

<nav class="menu-principal">
    <a href="index.php">Inici</a>
    <a href="index.php?accio=llistar-categories">Col·leccions</a>
    <a href="index.php#compromis">Compromís</a>
</nav>

<div class="menu-usuari">
    <button type="button" id="boto-usuari" title="El meu compte">
        <img src="img/usuari.svg" alt="El meu compte">
    </button>

    <ul id="desplegable">
        <?php if ($usuariIdentificat) { ?>
            <li><a href="index.php?accio=compte">El meu compte</a></li>
            <li><a href="index.php?accio=compres">Les meves compres</a></li>
            <li><a href="index.php?accio=logout">Tancar sessió</a></li>
        <?php } else { ?>
            <li><a href="index.php?accio=login">Iniciar sessió</a></li>
            <li><a href="index.php?accio=registre">Crear un compte</a></li>
        <?php } ?>
    </ul>
</div>
