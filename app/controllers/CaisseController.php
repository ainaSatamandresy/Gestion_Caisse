<?php


namespace app\controllers;


use Flight;

class CaisseController
{
    public function __construct() {}

    public function home(){
        Flight::render('home');
    }
}
