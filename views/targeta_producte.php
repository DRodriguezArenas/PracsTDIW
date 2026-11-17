<!-- views/targeta_producte.php : una targeta de producte (s'inclou dins d'un foreach) -->
<a href="index.php?accio=detall-producte&amp;producte=<?php echo (int) $producte['id']; ?>"
   class="targeta producte"
   data-id="<?php echo (int) $producte['id']; ?>">
    <div class="targeta-imatge">
        <img src="<?php echo htmlspecialchars($producte['imatge']); ?>"
             alt="<?php echo htmlspecialchars($producte['nom']); ?>">
        <span class="targeta-veure">Veure la peça</span>
    </div>
    <div class="targeta-info">
        <p class="targeta-material"><?php echo htmlspecialchars($producte['material']); ?></p>
        <h3><?php echo htmlspecialchars($producte['nom']); ?></h3>
        <p class="targeta-preu"><?php echo number_format((float) $producte['preu'], 2, ',', '.'); ?> €</p>
    </div>
</a>
