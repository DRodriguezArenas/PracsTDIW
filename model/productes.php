<?php
// model/productes.php

function getProductesCategoria($conn, $idCategoria)
{
    $sql = 'SELECT id, nom, preu, imatge, material
            FROM producte
            WHERE id_categoria = $1 AND actiu = TRUE
            ORDER BY nom';

    $result = pg_query_params($conn, $sql, [$idCategoria]);
    $productes = pg_fetch_all($result);

    return $productes ?: [];
}

// Un sol producte: fem servir pg_fetch_assoc perquè només hi ha una fila.
// El JOIN ens dona també el nom de la seva categoria.
function getProducte($conn, $idProducte)
{
    $sql = 'SELECT p.id, p.nom, p.descripcio, p.preu, p.material, p.imatge,
                   p.id_categoria, c.nom AS categoria
            FROM producte p
            JOIN categoria c ON c.id = p.id_categoria
            WHERE p.id = $1 AND p.actiu = TRUE';

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

// Altres productes de la mateixa categoria (per a "També et pot agradar")
function getProductesRelacionats($conn, $idCategoria, $idProducte)
{
    $sql = 'SELECT id, nom, preu, imatge, material
            FROM producte
            WHERE id_categoria = $1 AND id <> $2 AND actiu = TRUE
            ORDER BY nom
            LIMIT 4';

    $result = pg_query_params($conn, $sql, [$idCategoria, $idProducte]);
    $productes = pg_fetch_all($result);

    return $productes ?: [];
}
