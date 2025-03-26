<?php

namespace app\models;

use app\connection\UtilDb;
use app\models\GenericClass;
use Flight;
use PDO;
use PDOException;

class ProduitModel
{
    private $db;
    private $Designation;
    private $Nom_Produit;
    private $Prix_Unitaire;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAll(){
        $sql = "SELECT * FROM Produit";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setDesignation($designation){
        $this->Designation = $designation;
    }

    public function setNomProduit($nomProduit){
        $this->Nom_Produit = $nomProduit;
    }

    public function setPrixUnitaire($prixUnitaire){
        $this->Prix_Unitaire = $prixUnitaire;
    }

    public function getDesignation(){
        return $this->Designation;
    }

    public function getNomProduit(){
        return $this->Nom_Produit;
    }

    public function getPrixUnitaire(){
        return $this->Prix_Unitaire;
    }
    
}
