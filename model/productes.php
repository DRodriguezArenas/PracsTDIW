<?php
// model/productes.php

function getProductesCategoria($conn, $idCategoria)
{
    $sql = 'SELECT id, nom, preu, imatge
            FROM producte
            WHERE id_categoria = $1 AND actiu = TRUE
            ORDER BY nom';

    $result = pg_query_params($conn, $sql, [$idCategoria]);
    $productes = pg_fetch_all($result);

    return $productes ?: [];
}

// Un sol producte: fem servir pg_fetch_assoc perquè només hi ha una fila.
function getProducte($conn, $idProducte)
{
    $sql = 'SELECT id, nom, descripcio, preu, material, imatge
            FROM producte
            WHERE id = $1 AND actiu = TRUE';

    $result = pg_query_params($conn, $sql, [$idProducte]);

    return pg_fetch_assoc($result);   // false si no existeix
}

function getTalles($conn, $idProducte)
{
    $sql = 'SELECT id, talla, estoc
            FROM talla
            WHERE id_producte = $1
            ORDER BY id';

    $result = pg_query_params($conn, $sql, [$idProducte]);
    $talles = pg_fetch_all($result);

    return $talles ?: [];
}
