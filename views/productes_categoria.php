<!-- views/productes_categoria.php -->
<?php if (empty($productes)): ?>
    <p>No hi ha productes en aquesta categoria.</p>
<?php else: ?>
    <div class="productes">
        <?php foreach ($productes as $producte): ?>
            <a href="index.php?accio=detall-producte&amp;producte=<?php echo (int) $producte['id']; ?>"
               class="caixa producte"
               data-id="<?php echo (int) $producte['id']; ?>">
                <img src="<?php echo htmlspecialchars($producte['imatge']); ?>"
                     alt="<?php echo htmlspecialchars($producte['nom']); ?>">
                <h3><?php echo htmlspecialchars($producte['nom']); ?></h3>
                <p><?php echo number_format((float) $producte['preu'], 2, ',', '.'); ?> €</p>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
