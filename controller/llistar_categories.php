<?php
// controller/llistar_categories.php
// 1. Demana les categories al model.
// 2. Si a la URL hi ha ?categoria=ID, demana també els seus productes
//    (així la pàgina funciona encara que s'obri sense JavaScript).
// 3. Ho passa tot a la vista.

require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/categories.php';
require_once __DIR__ . '/../model/productes.php';

$conn = connectaDb();
$categories = getCategories($conn);

$idCategoriaTriada = (int) ($_GET['categoria'] ?? 0);
$productes = $idCategoriaTriada ? getProductesCategoria($conn, $idCategoriaTriada) : null;

include __DIR__ . '/../views/llistar_categories.php';
