<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style2.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="custom-form">
        <form id="achatForm">
            <div class="form-label">Veuillez saisir vos achats</div>
            <div class="form-group">
                <label for="produit" class="form-control-label">Produit :</label>
                <select name="produit" id="produit">
                    <?php foreach($listeProduit as $produit) { ?>
                        <option value="<?= $produit['id_Produit'] ?>"><?= $produit['Nom_Produit'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="quantite" class="form-control-label">Quantité :</label>
                <input type="number" name="quantite" id="quantite">
            </div>
            <div class="form-group">
                <input type="submit" value="Valider" class="btn-custom">
            </div>
        </form>

        <!-- Ce div est où le tableau sera inséré dynamiquement -->
        <div id="result"></div>
    </div>


    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#achatForm').submit(function(e) {
                e.preventDefault();  // Empêche la soumission normale du formulaire
                
                var produit = $('#produit').val();
                var quantite = $('#quantite').val();
                
                $.ajax({
                    url: '/achat/treatment/saisie_achat',  // L'URL où traiter le formulaire
                    method: 'POST',
                    data: { produit: produit, quantite: quantite },
                    success: function(response) {
                        // On insère la réponse (tableau) dans l'élément #result
                        $('#result').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
