-- ==========================================================
-- AUREA - Base de dades de la botiga (PostgreSQL)
-- ==========================================================

-- Esborrem les taules si ja existeixen (en ordre invers)
DROP TABLE IF EXISTS linia_comanda;
DROP TABLE IF EXISTS comanda;
DROP TABLE IF EXISTS usuari;
DROP TABLE IF EXISTS talla;
DROP TABLE IF EXISTS producte;
DROP TABLE IF EXISTS categoria;


-- ---------- Taules ----------

CREATE TABLE categoria (
    id      SERIAL PRIMARY KEY,
    nom     VARCHAR(50) NOT NULL,
    imatge  VARCHAR(100)
);

CREATE TABLE producte (
    id            SERIAL PRIMARY KEY,
    nom           VARCHAR(100) NOT NULL,
    descripcio    TEXT,
    preu          NUMERIC(8,2) NOT NULL CHECK (preu >= 0),
    material      VARCHAR(100),
    imatge        VARCHAR(100),
    id_categoria  INTEGER NOT NULL REFERENCES categoria(id)
);

CREATE TABLE talla (
    id           SERIAL PRIMARY KEY,
    talla        VARCHAR(10) NOT NULL,           -- '12', '14', 'Única'...
    estoc        INTEGER NOT NULL DEFAULT 0 CHECK (estoc >= 0),
    id_producte  INTEGER NOT NULL REFERENCES producte(id) ON DELETE CASCADE
);

CREATE TABLE usuari (
    id             SERIAL PRIMARY KEY,
    nom            VARCHAR(100) NOT NULL,
    email          VARCHAR(100) NOT NULL UNIQUE,
    password       VARCHAR(255) NOT NULL,        -- contrasenya xifrada (password_hash)
    adreca         VARCHAR(30)  NOT NULL,
    poblacio       VARCHAR(30)  NOT NULL,
    codi_postal    CHAR(5)      NOT NULL,        -- text per no perdre el 0 inicial
    imatge_perfil  VARCHAR(100)
);

CREATE TABLE comanda (
    id         SERIAL PRIMARY KEY,
    data       TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    total      NUMERIC(10,2) NOT NULL,
    id_usuari  INTEGER NOT NULL REFERENCES usuari(id)
);

-- Relació N:M entre comanda i talla
CREATE TABLE linia_comanda (
    id_comanda    INTEGER NOT NULL REFERENCES comanda(id) ON DELETE CASCADE,
    id_talla      INTEGER NOT NULL REFERENCES talla(id),
    quantitat     INTEGER NOT NULL CHECK (quantitat > 0),
    preu_unitari  NUMERIC(8,2) NOT NULL,
    PRIMARY KEY (id_comanda, id_talla)
);


-- ---------- Dades d'exemple ----------

INSERT INTO categoria (nom, imatge) VALUES
    ('Anells',    'img/anells.svg'),
    ('Collarets', 'img/collarets.svg'),
    ('Arracades', 'img/arracades.svg'),
    ('Polseres',  'img/polseres.svg');

INSERT INTO producte (nom, descripcio, preu, material, imatge, id_categoria) VALUES
    ('Anell de plata',        'Anell senzill fet a mà.',               45.00, 'Plata reciclada',        'img/anells.svg',    1),
    ('Anell amb aiguamarina', 'Aiguamarina de comerç just.',           89.00, 'Plata reciclada',        'img/anells.svg',    1),
    ('Aliança d''or',         'Aliança clàssica.',                    349.00, 'Or Fairmined 18k',       'img/anells.svg',    1),
    ('Collaret amb robí',     'Penjoll amb robí de comerç just.',     120.00, 'Plata reciclada',        'img/collarets.svg', 2),
    ('Arracades llargues',    'Arracades amb pedra verda.',            65.00, 'Plata reciclada',        'img/arracades.svg', 3),
    ('Polsera trenada',       'Polsera trenada a mà.',                 55.00, 'Plata reciclada',        'img/polseres.svg',  4);

INSERT INTO talla (talla, estoc, id_producte) VALUES
    ('12', 5, 1), ('14', 3, 1), ('16', 0, 1),
    ('12', 4, 2), ('14', 6, 2),
    ('14', 2, 3), ('16', 2, 3),
    ('45 cm', 8, 4),
    ('Única', 10, 5),
    ('S', 4, 6), ('M', 5, 6), ('L', 3, 6);
