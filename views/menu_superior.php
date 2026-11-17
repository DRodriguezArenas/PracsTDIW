<!-- views/menu_superior.php -->
<a href="index.php" class="logo">AUREA</a>

<nav class="menu-principal">
    <a href="index.php">Inici</a>
    <a href="index.php?accio=llistar-categories">Col·leccions</a>
    <a href="index.php#compromis">Compromís</a>
</nav>

<div class="menu-usuari">
    <button type="button" class="boto-usuari" aria-label="El meu compte" title="El meu compte">
        <!-- icona de persona -->
        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.6">
            <circle cx="12" cy="8" r="4"/>
            <path d="M4 21c0-4 3.6-7 8-7s8 3 8 7"/>
        </svg>
    </button>

    <ul class="desplegable">
        <?php if ($usuariIdentificat): ?>
            <li><a href="index.php?accio=compte">El meu compte</a></li>
            <li><a href="index.php?accio=compres">Les meves compres</a></li>
            <li><a href="index.php?accio=logout">Tancar sessió</a></li>
        <?php else: ?>
            <li class="desplegable-titol">Benvingut/da</li>
            <li><a href="index.php?accio=login">Iniciar sessió</a></li>
            <li><a href="index.php?accio=registre">Crear un compte</a></li>
        <?php endif; ?>
    </ul>
</div>
