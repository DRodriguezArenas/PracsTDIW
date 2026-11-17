<?php
// controller/detall_producte.php

require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/productes.php';

$idProducte = (int) ($_GET['producte'] ?? 0);

$conn = connectaDb();
$producte = getProducte($conn, $idProducte);
$talles = $producte ? getTalles($conn, $idProducte) : [];

include __DIR__ . '/../views/detall_producte.php';
