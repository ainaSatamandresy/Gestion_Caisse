<?php


namespace app\controllers;


use Flight;

class AchatController
{
    public function __construct() {}

    public function saisie_achat_form(){
        Flight::render('achat/saisie_achat_form');
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
