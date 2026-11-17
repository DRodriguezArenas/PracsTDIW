-- database/database.sql
-- Botiga Aurea - TDIW 2026-2027
-- Es pot executar tantes vegades com calgui: primer esborra les taules i les torna a crear.

DROP TABLE IF EXISTS linia_comanda CASCADE;
DROP TABLE IF EXISTS comanda       CASCADE;
DROP TABLE IF EXISTS talla         CASCADE;
DROP TABLE IF EXISTS producte      CASCADE;
DROP TABLE IF EXISTS categoria     CASCADE;
DROP TABLE IF EXISTS usuari        CASCADE;

-- ---------------------------------------------------------------
-- Taules (id autoincremental amb SERIAL)
-- ---------------------------------------------------------------

CREATE TABLE categoria
(
  id     SERIAL       PRIMARY KEY,
  nom    VARCHAR(50)  NOT NULL,
  imatge VARCHAR(100) NULL
);

CREATE TABLE usuari
(
  id            SERIAL       PRIMARY KEY,
  nom           VARCHAR(100) NOT NULL,
  email         VARCHAR(100) NOT NULL,
  password      VARCHAR(255) NOT NULL,
  adreca        VARCHAR(30)  NOT NULL,
  poblacio      VARCHAR(30)  NOT NULL,
  codi_postal   CHAR(5)      NOT NULL,
  imatge_perfil VARCHAR(100) NULL,
  CONSTRAINT UQ_usuari_email UNIQUE (email)
);

CREATE TABLE producte
(
  id           SERIAL       PRIMARY KEY,
  nom          VARCHAR(100) NOT NULL,
  descripcio   TEXT         NULL,
  preu         NUMERIC(8,2) NOT NULL,
  material     VARCHAR(100) NULL,
  imatge       VARCHAR(100) NULL,
  actiu        BOOLEAN      NOT NULL DEFAULT TRUE,
  id_categoria INT          NOT NULL,
  CONSTRAINT FK_categoria_TO_producte
    FOREIGN KEY (id_categoria) REFERENCES categoria (id)
);

CREATE TABLE talla
(
  id          SERIAL      PRIMARY KEY,
  talla       VARCHAR(10) NOT NULL,
  estoc       INTEGER     NOT NULL DEFAULT 0,
  id_producte INT         NOT NULL,
  CONSTRAINT FK_producte_TO_talla
    FOREIGN KEY (id_producte) REFERENCES producte (id) ON DELETE CASCADE
);

CREATE TABLE comanda
(
  id        SERIAL        PRIMARY KEY,
  data      TIMESTAMP     NOT NULL DEFAULT CURRENT_TIMESTAMP,
  total     NUMERIC(10,2) NOT NULL,
  id_usuari INT           NOT NULL,
  CONSTRAINT FK_usuari_TO_comanda
    FOREIGN KEY (id_usuari) REFERENCES usuari (id)
);

CREATE TABLE linia_comanda
(
  id_comanda   INT          NOT NULL,
  id_talla     INT          NOT NULL,
  quantitat    INTEGER      NOT NULL,
  preu_unitari NUMERIC(8,2) NOT NULL,
  PRIMARY KEY (id_comanda, id_talla),
  CONSTRAINT FK_comanda_TO_linia_comanda
    FOREIGN KEY (id_comanda) REFERENCES comanda (id) ON DELETE CASCADE,
  CONSTRAINT FK_talla_TO_linia_comanda
    FOREIGN KEY (id_talla) REFERENCES talla (id)
);

-- ---------------------------------------------------------------
-- Dades d'exemple (no posem l'id: el genera SERIAL)
-- ---------------------------------------------------------------

INSERT INTO categoria (nom, imatge) VALUES
  ('Anells',    'img/anells.svg'),     -- id 1
  ('Arracades', 'img/arracades.svg'),  -- id 2
  ('Collarets', 'img/collarets.svg'),  -- id 3
  ('Polseres',  'img/polseres.svg');   -- id 4

INSERT INTO producte (nom, descripcio, preu, material, imatge, id_categoria) VALUES
  ('Anell de plata',        'Anell senzill de plata de llei.',               45.00,  'plata 925',         'img/productes/anell-plata.svg',    1),
  ('Anell amb aiguamarina', 'Anell fet a mà amb plata reciclada.',           89.00,  'plata reciclada',   'img/productes/anell-aiguamarina.svg',    1),
  ('Aliança d''or',         'Aliança clàssica d''or groc.',                  349.00, 'or 18k',            'img/productes/alianca-or.svg',    1),
  ('Anell amb robí',        'Anell amb un robí central.',                    120.00, 'plata i robí',      'img/productes/anell-robi.svg',    1),
  ('Arracades de perla',    'Arracades amb perla cultivada.',                59.00,  'plata i perla',     'img/productes/arracades-perla.svg', 2),
  ('Arracades d''aro',      'Aros petits per a cada dia.',                   35.00,  'plata 925',         'img/productes/arracades-aro.svg', 2),
  ('Collaret de cor',       'Cadena fina amb penjoll en forma de cor.',      65.00,  'plata 925',         'img/productes/collaret-cor.svg', 3),
  ('Collaret d''or',        'Cadena d''or de 45 cm.',                        210.00, 'or 18k',            'img/productes/collaret-or.svg', 3),
  ('Polsera de cuir',       'Polsera de cuir amb tancament de plata.',       29.00,  'cuir i plata',      'img/productes/polsera-cuir.svg',  4),
  ('Polsera rígida',        'Polsera rígida d''acer daurat.',                49.00,  'acer daurat',       'img/productes/polsera-rigida.svg',  4);

INSERT INTO talla (talla, estoc, id_producte) VALUES
  ('14', 5, 1), ('16', 3, 1),
  ('14', 2, 2), ('16', 4, 2),
  ('16', 1, 3), ('18', 2, 3),
  ('16', 3, 4),
  ('Única', 10, 5), ('Única', 8, 6),
  ('45cm', 6, 7), ('45cm', 2, 8),
  ('M', 7, 9), ('M', 5, 10);
