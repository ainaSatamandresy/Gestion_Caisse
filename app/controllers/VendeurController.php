<?php


namespace app\controllers;


use Flight;

class VendeurController
{
    public function __construct() {}

    public function login_form(){
        Flight::render('vendeur/login');
    }

    public function login(){
        $data = Flight::request()->data;
        if($data!=null){
            $nom = $data['nom'];
        }

        Flight::redirect('/caisse/selection_caisse');
    }
}
