<?php


namespace app\controllers;

use app\models\ProduitModel;
use Flight;

class AchatController
{
    public function __construct() {}

    public function saisie_achat_form(){
        $listeProduit = (new ProduitModel(Flight::db()))->getAll();
        $data = ['listeProduit'=>$listeProduit];
        Flight::render('achat/saisie_achat_form',$data);
    }

    public function saisie_achat(){
        $form_Data = Flight::request()->data;
        if($form_Data!=null){
            $idProduit = $form_Data['produit'];
            $quantite = $form_Data['quantite'];
            $data = ['produit'=>$idProduit,'quantite'=>$quantite];
            Flight::render('achat/saisie_achat_form',$data);
        }
    }
}
