<?php

namespace app\models;

use PDO;

class VendeurModel
{
    private $db;
    private $idVendeur;
    private $nomVendeur;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAll(){
        $sql = "SELECT * FROM Vendeur";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setIdVendeur($idVendeur){
        $this->idVendeur = $idVendeur;
    }

    public function setNomVendeur($nomVendeur){
        $this->nomVendeur = $nomVendeur;
    }


    public function getNomVendeur(){
        return $this->nomVendeur;
    }

    public function getIdVendeur(){
        return $this->idVendeur;
    }


}
