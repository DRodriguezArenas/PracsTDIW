<?php
// model/connectaDb.php
// Obre la connexió amb la base de dades PostgreSQL.

function connectaDb()
{
    // Canvia LA_TEVA_CONTRASENYA per la contrasenya real NOMÉS al servidor.
    // No la pugis mai a GitHub!
    $conn = pg_connect("host=deic-docencia.uab.cat dbname=tdiw-e6 user=tdiw-e6 password=LA_TEVA_CONTRASENYA");
    return $conn;
}
