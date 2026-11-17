<?php
// models/m_usuaris.php

// Busca un usuari pel seu correu (retorna false si no existeix)
function consultaUsuari($connexio, $email){
    $sql = 'SELECT id, nom, email, password FROM usuari WHERE email = $1';
    $consulta = pg_query_params($connexio, $sql, array($email)) or die("Error sql");
    return pg_fetch_assoc($consulta);
}

// Guarda un usuari nou (la contrasenya ja arriba xifrada)
function insereixUsuari($connexio, $nom, $email, $hash, $adreca, $poblacio, $cp){
    $sql = 'INSERT INTO usuari (nom, email, password, adreca, poblacio, codi_postal)
            VALUES ($1, $2, $3, $4, $5, $6)';
    pg_query_params($connexio, $sql, array($nom, $email, $hash, $adreca, $poblacio, $cp)) or die("Error sql");
}
?>
