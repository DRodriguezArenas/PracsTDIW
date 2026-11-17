<?php
// controller/registre.php

require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/usuaris.php';

$missatge = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom      = trim($_POST['nom'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $adreca   = trim($_POST['adreca'] ?? '');
    $poblacio = trim($_POST['poblacio'] ?? '');
    $cp       = trim($_POST['cp'] ?? '');

    $hash = password_hash($password, PASSWORD_DEFAULT);   // cifratge

    $conn = connectaDb();
    $ok   = insertUsuari($conn, $nom, $email, $hash, $adreca, $poblacio, $cp);

    $missatge = $ok
        ? 'Usuari registrat correctament.'
        : 'No s\'ha pogut registrar. Potser aquest correu ja existeix.';
}

include __DIR__ . '/../views/registre.php';