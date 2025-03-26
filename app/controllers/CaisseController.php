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
        Flight::render('caisse/selection_caisse.php');
    }
}
