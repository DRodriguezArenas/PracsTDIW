<?php
// controladors/c_producte.php  (es crida amb FETCH)
include_once __DIR__ . "/../models/m_connectaBD.php";
include_once __DIR__ . "/../models/m_productes.php";

$connexio = connectaBD();
$producte = consultaProducte($connexio, $_GET['producte']);
$talles = consultaTalles($connexio, $_GET['producte']);

include __DIR__ . "/../vistes/v_producte.php";
?>
