<?php
// model/categories.php
// Consultes a la base de dades relacionades amb les categories.

function getCategories($conn)
{
    $sql = 'SELECT id, nom, imatge FROM categoria ORDER BY id';
    $result = pg_query($conn, $sql);
    $categories = pg_fetch_all($result);
    return $categories;
}
