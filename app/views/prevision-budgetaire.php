<?php

use app\connection\UtilDb;
use app\models\Budget;
use app\models\Departement;
use app\models\Utilisateur;

$budget  = new Budget(3, 1, 1023, 29, 1, true);

// $budget->save();ubu
$mois = 12;
// $budget->save();




$utilisateur  =  new Utilisateur()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prevision-budgetaire</title>
</head>

<body>
    <?php
    for ($i = 1; $i <= $mois; $i++) {  ?>
        <h3><?= $i . "/" . $annee  ?></h3>
        <table border="1">
            <tr>
                <th>Rubrique</th>
                <th>Prevision</th>
                <th>Realisation</th>
                <th>Ecart</th>
                <th>Validation</th>
            </tr>

        </table>
    <?php }
    ?>
</body>

</html>