<!-- views/llistar_categories.php -->
<section class="categories">
    <?php if (empty($categories)): ?>
        <p>No hi ha categories.</p>
    <?php endif; ?>
    <?php foreach ($categories as $categoria): ?>
        <a href="index.php?accio=llistar-productes&amp;categoria=<?php echo (int) $categoria['id']; ?>"
           class="categoria"
           data-id="<?php echo (int) $categoria['id']; ?>">
            <img src="<?php echo htmlspecialchars($categoria['imatge']); ?>" alt="<?php echo htmlspecialchars($categoria['nom']); ?>">
            <span><?php echo htmlspecialchars($categoria['nom']); ?></span>
        </a>
    <?php endforeach; ?>
</section>

<section id="productes-categoria"></section>