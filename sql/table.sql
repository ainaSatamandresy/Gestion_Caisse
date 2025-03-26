CREATE TABLE Departement (
    id INT PRIMARY KEY,
    nom VARCHAR(255)
);

CREATE TABLE Utilisateur ( 
    id INT PRIMARY KEY,
    nom VARCHAR(255),
    password VARCHAR(50)
);

CREATE TABLE Rubrique (
    id INT PRIMARY KEY,
    nom VARCHAR(255),
    categorie TINYINT CHECK (categorie IN (1, -1))
);

CREATE TABLE DepartementUtilisateur (
    id INT PRIMARY KEY,
    idDepartement INT,
    idUtilisateur INT,
    FOREIGN KEY (idDepartement) REFERENCES Departement(id),
    FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur(id)
);

CREATE TABLE Budget (
    id INT PRIMARY KEY,
    idRubrique INT ,
    prevision DECIMAL(10,2) ,
    realisation DECIMAL(10,2) ,
    ecart DECIMAL(10,2) ,
    validation BOOLEAN ,
    FOREIGN KEY (idRubrique) REFERENCES Rubrique(id)
);

CREATE TABLE Periode (
    id INT PRIMARY KEY,
    mois  INT  ,
    annee INT ,
    idBudget INT, 
    idDepartement INT,
    FOREIGN KEY (idDepartement) REFERENCES Departement(id),
    FOREIGN KEY (idBudget) REFERENCES Budget(id)
);

CREATE TABLE Transaction (
    id INT PRIMARY KEY,
    idUtilisateur INT,
    idBudget INT,
    FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur(id),
    FOREIGN KEY (idBudget) REFERENCES Budget(id),
    UNIQUE (idUtilisateur, idBudget) 
);