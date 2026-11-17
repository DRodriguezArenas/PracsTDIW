<?php
// controladors/c_productes.php  (es crida amb FETCH)
include_once __DIR__ . "/../models/m_connectaBD.php";
include_once __DIR__ . "/../models/m_productes.php";

$connexio = connectaBD();
$productes = consultaProductes($connexio, $_GET['categoria']);

include __DIR__ . "/../vistes/v_productes.php";
?>
