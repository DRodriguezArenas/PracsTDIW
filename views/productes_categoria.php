<!-- views/productes_categoria.php -->
<?php if (empty($productes)): ?>
    <p class="buit">No hi ha productes en aquesta categoria.</p>
<?php else: ?>
    <div class="productes">
        <?php foreach ($productes as $producte): ?>
            <?php include __DIR__ . '/targeta_producte.php'; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
