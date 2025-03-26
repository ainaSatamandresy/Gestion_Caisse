-- Drop constraints
ALTER TABLE t_parcelle DROP FOREIGN KEY fk_parcelle_variethe_the;
ALTER TABLE t_depense DROP FOREIGN KEY fk_depense_categorie_depense;
ALTER TABLE t_cueillette DROP FOREIGN KEY fk_cueillette_parcelle;
ALTER TABLE t_cueillette DROP FOREIGN KEY fk_cueillette_ceuilleur;

-- Drop tables
DROP TABLE IF EXISTS t_user;
DROP TABLE IF EXISTS t_variete_the;
DROP TABLE IF EXISTS t_parcelle;
DROP TABLE IF EXISTS t_cueilleur;
DROP TABLE IF EXISTS t_salaire;
DROP TABLE IF EXISTS t_categorie_depense;
DROP TABLE IF EXISTS t_depense;
DROP TABLE IF EXISTS t_cueillette;