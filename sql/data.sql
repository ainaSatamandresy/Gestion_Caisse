INSERT INTO Departement (id , nom) VALUES (1 , "Finance") ;

INSERT INTO Utilisateur (id , nom) VALUES (1 , "Directeur");

INSERT INTO Rubrique (id , nom , categorie) VALUES (1 , "Solde-debut"  , 1);
INSERT INTO Rubrique (id , nom , categorie) VALUES (2 , "Depense-salaire"  , -1);
INSERT INTO Rubrique (id , nom , categorie) VALUES (3 , "Depense-transport"  , -1);
INSERT INTO Rubrique (id , nom , categorie) VALUES (4, "Recette-vente"  , 1);
INSERT INTO Rubrique (id , nom , categorie) VALUES (5, "Recette-revenu"  , 1);
INSERT INTO Rubrique (id , nom , categorie) VALUES (6 , "Solde-fin"  , 1);

INSERT INTO DepartementUtilisateur (id, idDepartement , idUtilisateur ) VALUES (1 , 1 , 1);