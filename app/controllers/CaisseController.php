<?php


namespace app\controllers;


use Flight;

class CaisseController
{
    public function __construct() {}

    public function home(){
        Flight::render('caisse/home');
    }

    public function selection_caisse_form(){
        Flight::render('caisse/selection_caisse');
    }

    public function selection_caisse(){
        $data = Flight::request()->data;
        if($data!=null){
            $idCaisse = $data['caisse'];
        }

        Flight::redirect('/achat/saisie_achat_form');
    }
}
