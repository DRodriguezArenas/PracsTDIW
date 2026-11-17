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