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
    id_Achat INT PRIMARY KEY AUTO_INCREMENT,
    id_Produit INT,
    Quantite INT,
    FOREIGN KEY (id_Produit) REFERENCES Produit(id_Produit) ON DELETE CASCADE
);

-- Création de la table Caisse
CREATE TABLE Caisse (
    id_Caisse INT PRIMARY KEY AUTO_INCREMENT,
    id_Achat INT,
    FOREIGN KEY (id_Achat) REFERENCES Achat(id_Achat) ON DELETE CASCADE
);

-- Insertion de données de test
INSERT INTO Produit (Designation, Nom_Produit, Prix_Unitaire) VALUES
('Alimentaire', 'Riz', 2500),
('Boisson', 'Jus de fruits', 5000),
('Cosmétique', 'Shampoing', 8000),
('Électronique', 'Casque Audio', 15000),
('Vêtement', 'T-Shirt', 10000);

INSERT INTO Achat (id_Produit, Quantite) VALUES
(1, 10),
(2, 5),
(3, 2),
(4, 3),
(5, 7);

INSERT INTO Caisse (id_Achat) VALUES
(1),
(2);

-- Vérification des données insérées
SELECT * FROM Produit;
SELECT * FROM Achat;
SELECT * FROM Caisse;
