<?php


// namespace app\controllers;

// use app\models\DepartementUtilisateur;
// use app\models\Rubrique;
// use app\models\UsersModel;
// use app\models\Utilisateur;
// // use app\models\ProductModel;
// use Flight;

// class UtilisateurController
// {
//     public function __construct() {}

//     public function previsionBudgetair(){
//         $test_temp =   new DepartementUtilisateur();
//         $all_temp = $test_temp->findAll() ;
//         $data = ['annee'=>2024 ,  'idDepartement'=> 1  , 'all_temp' => $all_temp];
//         Flight::render("prevision-budgetaire" , $data);

//     }
    
//     public function loginForm(){
//         Flight::render('utilisateur/Login');
//     }

//     public function login(){
//         $data = Flight::request()->data;
//         if($data!=null){
//             $identifiant = $data['identifiant'];
//             $passwords = $data['pass'];
//             $user = new Utilisateur(Flight::db());
//             if($user->exist()){
                
//             }
//         }
//     }
// }
