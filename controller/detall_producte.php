<?php
// controller/detall_producte.php

require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/productes.php';

$idProducte = (int) ($_GET['producte'] ?? 0);

$conn = connectaDb();
$producte = getProducte($conn, $idProducte);

$talles = [];
$relacionats = [];
if ($producte) {
    $talles = getTalles($conn, $idProducte);
    $relacionats = getProductesRelacionats($conn, (int) $producte['id_categoria'], $idProducte);
}

include __DIR__ . '/../views/detall_producte.php';
