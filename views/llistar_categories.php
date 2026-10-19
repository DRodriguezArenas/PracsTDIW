<!-- views/llistar_categories.php -->
<!-- Rep la variable $categories del controlador i en fa una caixa per cadascuna. -->
<section class="categories">
    <?php foreach ($categories as $categoria): ?>
        <a href="index.php?accio=llistar-productes&categoria=<?php echo $categoria['id']; ?>" class="categoria">
            <img src="<?php echo htmlspecialchars($categoria['imatge']); ?>" alt="<?php echo htmlspecialchars($categoria['nom']); ?>">
            <span><?php echo htmlspecialchars($categoria['nom']); ?></span>
        </a>
    <?php endforeach; ?>
</section>
