-- database/actualitza_imatges.sql
-- Posa a cada producte la seva imatge pròpia SENSE esborrar res de la base de dades.
-- (Si prefereixes començar de zero, executa database.sql, que ja porta les imatges noves.)

UPDATE producte SET imatge = 'img/productes/anell-plata.svg' WHERE nom = 'Anell de plata';
UPDATE producte SET imatge = 'img/productes/anell-aiguamarina.svg' WHERE nom = 'Anell amb aiguamarina';
UPDATE producte SET imatge = 'img/productes/alianca-or.svg' WHERE nom = 'Aliança d''or';
UPDATE producte SET imatge = 'img/productes/anell-robi.svg' WHERE nom = 'Anell amb robí';
UPDATE producte SET imatge = 'img/productes/arracades-perla.svg' WHERE nom = 'Arracades de perla';
UPDATE producte SET imatge = 'img/productes/arracades-aro.svg' WHERE nom = 'Arracades d''aro';
UPDATE producte SET imatge = 'img/productes/collaret-cor.svg' WHERE nom = 'Collaret de cor';
UPDATE producte SET imatge = 'img/productes/collaret-or.svg' WHERE nom = 'Collaret d''or';
UPDATE producte SET imatge = 'img/productes/polsera-cuir.svg' WHERE nom = 'Polsera de cuir';
UPDATE producte SET imatge = 'img/productes/polsera-rigida.svg' WHERE nom = 'Polsera rígida';
