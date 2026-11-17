<!-- vistes/v_producte.php -->
<button type="button" class="tornar" onClick="tancaProducte();">← Tornar a <?php echo $producte['categoria']; ?></button>

<div class="detall">
    <img src="<?php echo $producte['imatge']; ?>" alt="<?php echo $producte['nom']; ?>">

    <div class="detall-info">
        <p class="detall-categoria"><?php echo $producte['categoria']; ?></p>
        <h1><?php echo $producte['nom']; ?></h1>
        <p class="detall-preu"><?php echo $producte['preu']; ?> €</p>
        <p class="detall-descripcio"><?php echo $producte['descripcio']; ?></p>

        <!-- Encara no és funcional: el cabàs es farà a la sessió 4 -->
        <form>
            <label for="talla">Talla</label>
            <select id="talla" name="talla">
                <?php foreach ($talles as $talla) { ?>
                    <option value="<?php echo $talla['id']; ?>"><?php echo $talla['talla']; ?></option>
                <?php } ?>
            </select>

            <label for="quantitat">Quantitat</label>
            <input type="number" id="quantitat" name="quantitat" value="1" min="1">

            <button type="button" class="boto">Afegir al cabàs</button>
        </form>

        <ul class="detall-dades">
            <li><span>Material</span> <?php echo $producte['material']; ?></li>
            <li><span>Origen</span> Comerç just</li>
            <li><span>Enviament</span> Gratuït en 48-72 h</li>
        </ul>
    </div>
</div>
