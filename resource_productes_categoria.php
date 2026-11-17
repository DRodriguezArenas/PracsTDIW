<?php
// resource_productes_categoria.php
// - Amb &fragment=1 (crida FETCH): només retorna el fragment amb els productes.
// - Sense (enllaç obert directament): mostra la pàgina de col·leccions sencera
//   amb els productes de la categoria ja carregats.

if (isset($_GET['fragment'])) {
    require __DIR__ . '/controller/productes_categoria.php';
} else {
    require __DIR__ . '/resource_llistar_categories.php';
}
