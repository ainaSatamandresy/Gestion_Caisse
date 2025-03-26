CREATE DATABASE IF NOT EXISTS magasin;
USE magasin;

-- Création de la table Produit
CREATE TABLE Produit (
    id_Produit INT PRIMARY KEY AUTO_INCREMENT,
    Designation VARCHAR(255),
    Nom_Produit VARCHAR(255),
    Prix_Unitaire INT
);

-- Création de la table Achat
CREATE TABLE Achat (
    id_Achat INT ,
    id_client INT,      -- Nouvelle colonne id_client ajoutée
    id_Produit INT,     -- Liaison avec la table Produit
    Quantite INT,
    FOREIGN KEY (id_Produit) REFERENCES Produit(id_Produit) ON DELETE CASCADE
);

-- Création de la table Caisse
CREATE TABLE Caisse (
    id_Caisse INT PRIMARY KEY AUTO_INCREMENT,
    id_Achat INT,       -- Liaison avec la table Achat
    FOREIGN KEY (id_Achat) REFERENCES Achat(id_Achat) ON DELETE CASCADE
);

-- Création de la table Vendeur
CREATE TABLE Vendeur (
    id_vendeur INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255)
);

-- Insertion de données de test dans Produit
INSERT INTO Produit (Designation, Nom_Produit, Prix_Unitaire) VALUES
('Alimentaire', 'Riz', 2500),
('Boisson', 'Jus de fruits', 5000),
('Cosmétique', 'Shampoing', 8000),
('Électronique', 'Casque Audio', 15000),
('Vêtement', 'T-Shirt', 10000);

-- Insertion de données de test dans Achat
INSERT INTO Achat (id_Achat, id_client, id_Produit, Quantite) VALUES
(1,1, 1, 10),
(1,1, 2, 5),
(1,1, 3, 2),
(2,2, 4, 3),
(2,2, 5, 7);

-- Insertion de données de test dans Caisse
INSERT INTO Caisse (id_Achat) VALUES
(1),
(2);

-- Insertion de données de test dans Vendeur
INSERT INTO Vendeur (nom) VALUES
('Vendeur 1'),
('Vendeur 2');

-- Vérification des données insérées
SELECT * FROM Produit;
SELECT * FROM Achat;
SELECT * FROM Caisse;
SELECT * FROM Vendeur;
