<!-- views/detall_producte.php -->
<?php if (!$producte): ?>
    <p class="buit">Aquest producte no existeix.</p>
<?php else: ?>
    <div class="detall">
        <div class="detall-imatge">
            <img src="<?php echo htmlspecialchars($producte['imatge']); ?>"
                 alt="<?php echo htmlspecialchars($producte['nom']); ?>">
        </div>

        <div class="detall-info">
            <p class="detall-categoria"><?php echo htmlspecialchars($producte['categoria']); ?></p>
            <h2><?php echo htmlspecialchars($producte['nom']); ?></h2>
            <p class="detall-preu"><?php echo number_format((float) $producte['preu'], 2, ',', '.'); ?> €</p>

            <p class="detall-descripcio"><?php echo htmlspecialchars($producte['descripcio']); ?></p>

            <ul class="detall-dades">
                <li><span>Material</span> <?php echo htmlspecialchars($producte['material']); ?></li>
                <li><span>Origen</span> Comerç just i traçable</li>
                <li><span>Enviament</span> Gratuït en 48-72 h</li>
            </ul>

            <!-- Encara no és funcional: el cabàs es farà a la sessió 4 -->
            <form class="afegir-cabas">
                <p class="etiqueta">Talla</p>
                <div class="talles">
                    <?php foreach ($talles as $i => $talla): ?>
                        <?php $exhaurida = (int) $talla['estoc'] === 0; ?>
                        <label class="talla <?php echo $exhaurida ? 'exhaurida' : ''; ?>">
                            <input type="radio" name="talla"
                                   value="<?php echo (int) $talla['id']; ?>"
                                   <?php echo $exhaurida ? 'disabled' : ''; ?>
                                   <?php echo $i === 0 && !$exhaurida ? 'checked' : ''; ?>>
                            <span><?php echo htmlspecialchars($talla['talla']); ?></span>
                        </label>
                    <?php endforeach; ?>
                </div>

                <div class="fila-comprar">
                    <label for="quantitat" class="etiqueta">Quantitat</label>
                    <input type="number" id="quantitat" name="quantitat" value="1" min="1">
                    <button type="submit" class="boto">Afegir al cabàs</button>
                </div>
                <p class="missatge-cabas"></p>
            </form>
        </div>
    </div>
<?php endif; ?>
