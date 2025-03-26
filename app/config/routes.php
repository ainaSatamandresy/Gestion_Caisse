<?php

use app\controllers\UsersController;
use app\controllers\AdminController;
use app\controllers\CaisseController;
use app\controllers\DepenseController;
use app\controllers\TypeDepenseController;
use app\controllers\ParcelleController;
use app\controllers\VarieteController;
use app\controllers\CueilletteController;
use app\controllers\UtilisateurController;
use flight\Engine;
use flight\net\Router;
//use Flight;

/** 
 * @var Router $router 
 * @var Engine $app
 */
/*$router->get('/', function() use ($app) {
	$Welcome_Controller = new WelcomeController($app);
	$app->render('welcome', [ 'message' => 'It works!!' ]);
});*/

// $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
// $host = $_SERVER['HTTP_HOST'];
// // $projectPath = '/CADEAU/ETU003151/local/c/public/';
// $projectPath = '/HOME/20250110/';
// define('BASE_URL', $protocol . '://' . $host .$projectPath);
// http://localhost/c/public/traitement-login

$router->get('/', function(){
	Flight::redirect('/caisse/selection_caisse');
}); 	


$router->group('/caisse',function () use ($router,$app){
	$caisseController = new CaisseController();
	$router->get('/home',[$caisseController,'home']);	
	$router->get('/selection_caisse',[$caisseController,'selection_caisse_form']);
});