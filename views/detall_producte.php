<!-- views/detall_producte.php -->
<?php if (!$producte): ?>
    <p class="buit">Aquest producte no existeix.</p>
<?php else: ?>
    <nav class="molles">
        <a class="tornar" href="index.php?accio=productes-categoria&amp;categoria=<?php echo (int) $producte['id_categoria']; ?>">← Tornar a <?php echo htmlspecialchars($producte['categoria']); ?></a>
        <span>Col·leccions / <?php echo htmlspecialchars($producte['categoria']); ?> / <b><?php echo htmlspecialchars($producte['nom']); ?></b></span>
    </nav>

    <div class="detall" data-producte="<?php echo (int) $producte['id']; ?>">
        <div class="detall-imatge">
            <img src="<?php echo htmlspecialchars($producte['imatge']); ?>"
                 alt="<?php echo htmlspecialchars($producte['nom']); ?>">
        </div>

        <div class="detall-info">
            <p class="detall-categoria"><?php echo htmlspecialchars($producte['categoria']); ?></p>
            <h1><?php echo htmlspecialchars($producte['nom']); ?></h1>
            <p class="detall-preu"><?php echo number_format((float) $producte['preu'], 2, ',', '.'); ?> €</p>
            <p class="detall-descripcio"><?php echo htmlspecialchars($producte['descripcio']); ?></p>

            <!-- Encara no és funcional: el cabàs es farà a la sessió 4 -->
            <form class="afegir-cabas">
                <p class="etiqueta">Talla</p>
                <div class="talles">
                    <?php $primeraTriada = false; ?>
                    <?php foreach ($talles as $talla): ?>
                        <?php $exhaurida = (int) $talla['estoc'] === 0; ?>
                        <label class="talla<?php echo $exhaurida ? ' exhaurida' : ''; ?>">
                            <input type="radio" name="talla" value="<?php echo (int) $talla['id']; ?>"
                                <?php if ($exhaurida) { echo 'disabled'; } elseif (!$primeraTriada) { echo 'checked'; $primeraTriada = true; } ?>>
                            <span><?php echo htmlspecialchars($talla['talla']); ?></span>
                        </label>
                    <?php endforeach; ?>
                </div>

                <p class="etiqueta">Quantitat</p>
                <div class="fila-comprar">
                    <div class="quantitat">
                        <button type="button" class="menys" aria-label="Menys">−</button>
                        <input type="number" name="quantitat" value="1" min="1" aria-label="Quantitat">
                        <button type="button" class="mes" aria-label="Més">+</button>
                    </div>
                    <button type="submit" class="boto">Afegir al cabàs</button>
                </div>
                <p class="missatge-cabas"></p>
            </form>

            <ul class="detall-dades">
                <li><span>Material</span><?php echo htmlspecialchars($producte['material']); ?></li>
                <li><span>Origen</span>Comerç just i traçable</li>
                <li><span>Enviament</span>Gratuït en 48-72 h</li>
                <li><span>Garantia</span>2 anys i neteja gratuïta</li>
            </ul>
        </div>
    </div>

    <?php if (!empty($relacionats)): ?>
        <section class="relacionats">
            <h2>També et pot agradar</h2>
            <div class="productes">
                <?php foreach ($relacionats as $producte): ?>
                    <?php include __DIR__ . '/targeta_producte.php'; ?>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
