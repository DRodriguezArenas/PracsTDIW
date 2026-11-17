<!-- vistes/v_registre.php -->
<form class="formulari" method="post" action="index.php?accio=registre">
    <h2>Crea el teu compte</h2>

    <?php if ($missatge != "") { ?>
        <p class="avis"><?php echo $missatge; ?></p>
    <?php } ?>

    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom" required pattern="[A-Za-zÀ-ÿ ]+">

    <label for="email">Correu electrònic</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Contrasenya</label>
    <input type="password" id="password" name="password" required pattern="[A-Za-z0-9]+">

    <label for="adreca">Adreça</label>
    <input type="text" id="adreca" name="adreca" required maxlength="30">

    <label for="poblacio">Població</label>
    <input type="text" id="poblacio" name="poblacio" required maxlength="30">

    <label for="cp">Codi postal</label>
    <input type="text" id="cp" name="cp" required pattern="\d{5}">

    <button type="submit" class="boto">Registrar-se</button>

    <p class="formulari-peu">Ja tens compte? <a href="index.php?accio=login">Inicia sessió</a></p>
</form>
