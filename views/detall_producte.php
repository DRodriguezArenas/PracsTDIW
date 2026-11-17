<!-- views/detall_producte.php -->
<?php if (!$producte): ?>
    <p>Aquest producte no existeix.</p>
<?php else: ?>
    <div class="detall">
        <img src="<?php echo htmlspecialchars($producte['imatge']); ?>"
             alt="<?php echo htmlspecialchars($producte['nom']); ?>">

        <div>
            <h2><?php echo htmlspecialchars($producte['nom']); ?></h2>
            <p class="preu"><?php echo number_format((float) $producte['preu'], 2, ',', '.'); ?> €</p>
            <p><b>Material:</b> <?php echo htmlspecialchars($producte['material']); ?></p>
            <p><?php echo htmlspecialchars($producte['descripcio']); ?></p>

            <!-- Encara no és funcional: el cabàs es farà a la sessió 4 -->
            <form class="afegir-cabas">
                <label for="talla">Talla:</label>
                <select id="talla" name="talla">
                    <?php foreach ($talles as $talla): ?>
                        <option value="<?php echo (int) $talla['id']; ?>">
                            <?php echo htmlspecialchars($talla['talla']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <label for="quantitat">Quantitat:</label>
                <input type="number" id="quantitat" name="quantitat" value="1" min="1">

                <button type="submit" class="boto">Afegir al cabàs</button>
            </form>
        </div>
    </div>
<?php endif; ?>
