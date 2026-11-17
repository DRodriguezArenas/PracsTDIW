<!-- views/llistar_categories.php -->
<section id="cataleg">
    <div class="categories">
        <?php if (empty($categories)): ?>
            <p class="buit">No hi ha categories.</p>
        <?php endif; ?>
        <?php foreach ($categories as $categoria): ?>
            <a href="index.php?accio=productes-categoria&amp;categoria=<?php echo (int) $categoria['id']; ?>"
               class="categoria"
               data-id="<?php echo (int) $categoria['id']; ?>">
                <div class="categoria-imatge">
                    <img src="<?php echo htmlspecialchars($categoria['imatge']); ?>" alt="<?php echo htmlspecialchars($categoria['nom']); ?>">
                </div>
                <h3><?php echo htmlspecialchars($categoria['nom']); ?></h3>
                <span>Veure peces →</span>
            </a>
        <?php endforeach; ?>
    </div>

    <div id="productes-categoria"></div>
</section>

<!-- Aquí es carrega el detall del producte (amb FETCH) -->
<section id="detall-producte"></section>
