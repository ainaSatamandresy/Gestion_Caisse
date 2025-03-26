
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/achat/treatment/saisie_achat" method="post">
        <div>
            <label for="produit">Produit : </label>
            <select name="produit" id="produit">
                <?php foreach($listeProduit as $produit) {?>
                    <option value="<?= $produit['id_Produit'] ?>"><?= $produit['Nom_Produit'] ?></option>
                <?php }?>
            </select>
        </div>
        <div>
            <label for="quantite">Quantite : </label>
            <input type="number" name="quantite" id="quantite">
        </div>
        <div>
            <input type="submit" value="valider">
        </div>
    </form>

    <?php if(isset($produit) && isset($quantite)) {?>
        <table>
            <tr>
                <th>Produit</th>
                <th>Prix Unit</th>
                <th>Qte</th>
                <th>Montant</th>
            </tr>
            <tr>
                <td><?= $produit ?></td>
                <td>-</td>
                <td><?= $quantite ?></td>
                <td></td>
            </tr>
        </table>        
    <?php } ?>

</body>

</html>