<?php
// controller/productes_categoria.php

require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/productes.php';

$idCategoria = (int) ($_GET['categoria'] ?? 0);

$conn = connectaDb();
$productes = getProductesCategoria($conn, $idCategoria);

include __DIR__ . '/../views/productes_categoria.php';