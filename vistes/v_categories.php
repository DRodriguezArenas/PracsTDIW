<!-- vistes/v_categories.php -->
<section id="cataleg">
    <div class="categories">
        <?php foreach ($categories as $categoria) { ?>
            <div class="categoria" onClick="mostraProductes(<?php echo $categoria['id']; ?>);">
                <img src="<?php echo $categoria['imatge']; ?>" alt="<?php echo $categoria['nom']; ?>">
                <h3><?php echo $categoria['nom']; ?></h3>
                <span>Veure peces →</span>
            </div>
        <?php } ?>
    </div>

    <!-- Aquí es posen els productes de la categoria (FETCH) -->
    <div id="productes"></div>
</section>

<!-- Aquí es posa el detall del producte (FETCH) -->
<section id="detall"></section>
