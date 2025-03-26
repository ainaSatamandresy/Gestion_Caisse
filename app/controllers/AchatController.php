<?php

namespace app\controllers;

use app\models\ProduitModel;
use Flight;

class AchatController
{
    public function __construct() {}

    public function saisie_achat_form(){

        $listeProduit = (new ProduitModel(Flight::db()))->getAll();
        $data = ['listeProduit' => $listeProduit];
        Flight::render('achat/saisie_achat_form', $data);
    }

    public function saisie_achat(){
        $form_Data = Flight::request()->data;

        if ($form_Data != null) {
            $idProduit = $form_Data['produit'];
            $quantite = $form_Data['quantite'];

            // Récupérer les informations du produit
            $produitModel = new ProduitModel(Flight::db());
            $produit = $produitModel->getById($idProduit); // Méthode à créer dans le modèle

            // Si le produit existe
            if ($produit) {
                $prixUnit = $produit['Prix_Unitaire'];
                $montant = $prixUnit * $quantite;

                // Renvoyer la réponse sous forme de HTML (tableau avec les détails)
                $response = '<table>';
                $response .= '<tr><th>Produit</th><th>Prix Unit</th><th>Quantité</th><th>Montant</th></tr>';
                $response .= '<tr><td>' . $produit['Nom_Produit'] . '</td><td>' . $prixUnit . '</td><td>' . $quantite . '</td><td>' . $montant . '</td></tr>';
                $response .= '</table>';

                // Retourner la réponse à l'appel AJAX
                echo $response;
            } else {
                // Si le produit n'est pas trouvé
                echo 'Produit non trouvé.';
            }
        }
    }
    
}
