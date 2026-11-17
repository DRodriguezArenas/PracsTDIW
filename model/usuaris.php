<?php
// model/usuaris.php

function insertUsuari($conn, $nom, $email, $hash, $adreca, $poblacio, $cp)
{
    $sql = 'INSERT INTO usuari (nom, email, password, adreca, poblacio, codi_postal)
            VALUES ($1, $2, $3, $4, $5, $6)';

    $result = pg_query_params($conn, $sql, [$nom, $email, $hash, $adreca, $poblacio, $cp]);

    return $result !== false;   // false si falla, p. ej. si el email ya existe (UNIQUE)
}