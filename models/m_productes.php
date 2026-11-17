<?php
// models/m_productes.php
// Consultes parametritzades: el $1 es substitueix pel valor de l'array (evita SQL injection).

// Tots els productes d'una categoria
function consultaProductes($connexio, $idCategoria){
    $sql = 'SELECT id, nom, preu, imatge, material
            FROM producte
            WHERE id_categoria = $1 AND actiu = TRUE
            ORDER BY nom';
    $consulta = pg_query_params($connexio, $sql, array($idCategoria)) or die("Error sql");
    return pg_fetch_all($consulta);
}

// Un sol producte (amb el nom de la seva categoria)
function consultaProducte($connexio, $idProducte){
    $sql = 'SELECT producte.id, producte.nom, producte.descripcio, producte.preu,
                   producte.material, producte.imatge, categoria.nom AS categoria
            FROM producte JOIN categoria ON categoria.id = producte.id_categoria
            WHERE producte.id = $1';
    $consulta = pg_query_params($connexio, $sql, array($idProducte)) or die("Error sql");
    return pg_fetch_assoc($consulta);     // una sola fila
}

// Les talles d'un producte
function consultaTalles($connexio, $idProducte){
    $sql = 'SELECT id, talla FROM talla WHERE id_producte = $1 ORDER BY id';
    $consulta = pg_query_params($connexio, $sql, array($idProducte)) or die("Error sql");
    return pg_fetch_all($consulta);
}
?>
