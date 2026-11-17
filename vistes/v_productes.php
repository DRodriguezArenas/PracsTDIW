<!-- vistes/v_productes.php -->
<div class="productes">
    <?php foreach ($productes as $producte) { ?>
        <div class="targeta" onClick="mostraProducte(<?php echo $producte['id']; ?>);">
            <img src="<?php echo $producte['imatge']; ?>" alt="<?php echo $producte['nom']; ?>">
            <p class="material"><?php echo $producte['material']; ?></p>
            <h3><?php echo $producte['nom']; ?></h3>
            <p class="preu"><?php echo $producte['preu']; ?> €</p>
        </div>
    <?php } ?>
</div>
