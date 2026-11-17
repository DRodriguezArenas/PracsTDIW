<?php
// models/m_categories.php

function consultaCategories($connexio){
    $sql = "SELECT id, nom, imatge FROM categoria ORDER BY id";
    $consulta = pg_query($connexio, $sql) or die("Error sql");
    return pg_fetch_all($consulta);
}
?>
