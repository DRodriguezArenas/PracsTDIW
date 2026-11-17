<!-- views/llistar_categories.php -->
<section class="categories">
    <?php if (empty($categories)): ?>
        <p class="buit">No hi ha categories.</p>
    <?php endif; ?>
    <?php foreach ($categories as $categoria): ?>
        <a href="index.php?accio=productes-categoria&amp;categoria=<?php echo (int) $categoria['id']; ?>"
           class="categoria"
           data-id="<?php echo (int) $categoria['id']; ?>">
            <img src="<?php echo htmlspecialchars($categoria['imatge']); ?>" alt="<?php echo htmlspecialchars($categoria['nom']); ?>">
            <span><?php echo htmlspecialchars($categoria['nom']); ?></span>
        </a>
    <?php endforeach; ?>
</section>

<section id="productes-categoria"></section>

<!-- Finestra emergent on es carrega el detall del producte -->
<div id="modal-producte" class="modal">
    <div class="modal-contingut">
        <button type="button" class="tancar-modal" aria-label="Tancar">×</button>
        <div id="detall-producte"></div>
    </div>
</div>
