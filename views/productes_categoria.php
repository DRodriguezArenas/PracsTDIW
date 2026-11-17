<!-- views/productes_categoria.php -->
<?php if (empty($productes)): ?>
    <p class="buit">No hi ha productes en aquesta categoria.</p>
<?php else: ?>
    <div class="productes">
        <?php foreach ($productes as $producte): ?>
            <a href="index.php?accio=detall-producte&amp;producte=<?php echo (int) $producte['id']; ?>"
               class="targeta producte"
               data-id="<?php echo (int) $producte['id']; ?>">
                <div class="targeta-imatge">
                    <img src="<?php echo htmlspecialchars($producte['imatge']); ?>"
                         alt="<?php echo htmlspecialchars($producte['nom']); ?>">
                </div>
                <div class="targeta-info">
                    <p class="targeta-material"><?php echo htmlspecialchars($producte['material']); ?></p>
                    <h3><?php echo htmlspecialchars($producte['nom']); ?></h3>
                    <p class="targeta-preu"><?php echo number_format((float) $producte['preu'], 2, ',', '.'); ?> €</p>
                    <span class="targeta-veure">Veure detall →</span>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
