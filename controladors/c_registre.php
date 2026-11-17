<?php
// controladors/c_registre.php
include_once __DIR__ . "/../models/m_connectaBD.php";
include_once __DIR__ . "/../models/m_usuaris.php";

$missatge = "";

// Només si s'ha enviat el formulari
if (isset($_POST['email'])) {
    $connexio = connectaBD();

    if (consultaUsuari($connexio, $_POST['email'])) {
        $missatge = "Ja existeix un usuari amb aquest correu.";
    } else {
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);   // contrasenya xifrada
        insereixUsuari($connexio, $_POST['nom'], $_POST['email'], $hash,
                       $_POST['adreca'], $_POST['poblacio'], $_POST['cp']);
        $missatge = "Usuari registrat correctament!";
    }
}

include __DIR__ . "/../vistes/v_registre.php";
?>
