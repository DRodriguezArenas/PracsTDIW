<?php
// controladors/c_menu.php
// Mira si l'usuari ha iniciat sessió (es farà a la sessió 4) per saber quines opcions mostrar.

$usuariIdentificat = isset($_SESSION['id_usuari']);

include __DIR__ . "/../vistes/v_menu.php";
?>
