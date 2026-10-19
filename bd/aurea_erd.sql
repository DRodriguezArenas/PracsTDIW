-- Només l'estructura, per importar a ERD Editor (Import > SQL DDL)

CREATE TABLE categoria (
    id      SERIAL       NOT NULL,
    nom     VARCHAR(50)  NOT NULL,
    imatge  VARCHAR(100),
    PRIMARY KEY (id)
);

CREATE TABLE producte (
    id            SERIAL        NOT NULL,
    nom           VARCHAR(100)  NOT NULL,
    descripcio    TEXT,
    preu          NUMERIC(8,2)  NOT NULL,
    material      VARCHAR(100),
    imatge        VARCHAR(100),
    id_categoria  INTEGER       NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE talla (
    id           SERIAL       NOT NULL,
    talla        VARCHAR(10)  NOT NULL,
    estoc        INTEGER      NOT NULL,
    id_producte  INTEGER      NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE usuari (
    id             SERIAL        NOT NULL,
    nom            VARCHAR(100)  NOT NULL,
    email          VARCHAR(100)  NOT NULL UNIQUE,
    password       VARCHAR(255)  NOT NULL,
    adreca         VARCHAR(30)   NOT NULL,
    poblacio       VARCHAR(30)   NOT NULL,
    codi_postal    CHAR(5)       NOT NULL,
    imatge_perfil  VARCHAR(100),
    PRIMARY KEY (id)
);

CREATE TABLE comanda (
    id         SERIAL         NOT NULL,
    data       TIMESTAMP      NOT NULL,
    total      NUMERIC(10,2)  NOT NULL,
    id_usuari  INTEGER        NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE linia_comanda (
    id_comanda    INTEGER       NOT NULL,
    id_talla      INTEGER       NOT NULL,
    quantitat     INTEGER       NOT NULL,
    preu_unitari  NUMERIC(8,2)  NOT NULL,
    PRIMARY KEY (id_comanda, id_talla)
);

ALTER TABLE producte ADD CONSTRAINT fk_producte_categoria
    FOREIGN KEY (id_categoria) REFERENCES categoria (id);

ALTER TABLE talla ADD CONSTRAINT fk_talla_producte
    FOREIGN KEY (id_producte) REFERENCES producte (id);

ALTER TABLE comanda ADD CONSTRAINT fk_comanda_usuari
    FOREIGN KEY (id_usuari) REFERENCES usuari (id);

ALTER TABLE linia_comanda ADD CONSTRAINT fk_linia_comanda
    FOREIGN KEY (id_comanda) REFERENCES comanda (id);

ALTER TABLE linia_comanda ADD CONSTRAINT fk_linia_talla
    FOREIGN KEY (id_talla) REFERENCES talla (id);
