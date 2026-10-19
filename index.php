<?php
// index.php
// ENCAMINADOR (router): totes les peticions passen per aquí.
// Mira el paràmetre "accio" de la URL i inclou el recurs que toca.

$accio = $_GET['accio'] ?? null;

switch ($accio) {
    case 'llistar-categories':
        include __DIR__ . '/resource_llistar_categories.php';
        break;
    case 'llistar-productes':
        include __DIR__ . '/resource_llistar_productes.php';
        break;
    case 'detall-producte':
        include __DIR__ . '/resource_detall_producte.php';
        break;
    case 'registre':
        include __DIR__ . '/resource_registre.php';
        break;
    case 'login':
        include __DIR__ . '/resource_login.php';
        break;
    default:
        include __DIR__ . '/resource_portada.php';
        break;
}
