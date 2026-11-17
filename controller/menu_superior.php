<?php
// controller/menu_superior.php
// Mira si hi ha un usuari identificat per saber quines opcions mostrar.
// (L'inici de sessió es farà a la sessió 4: de moment sempre serà false.)

$usuariIdentificat = isset($_SESSION['id_usuari']);

include __DIR__ . '/../views/menu_superior.php';
