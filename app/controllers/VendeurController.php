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
        Flight::redirect('/caisse/selection_caisse');
    }
}
