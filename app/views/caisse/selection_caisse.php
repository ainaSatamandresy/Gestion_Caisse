<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Homepage</title>
    <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="/assets/css/style.css">
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <form action="/caisse/treatment/selection_caisse" class="custom-form" method="post">
        <div class="form-label">Veuillez choisir une caisse pour continuer</div>
        <center>
        <div class="radio-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="caisse" id="caisse1" value="caisse1">
                <label class="form-check-label" for="caisse1">Caisse 1</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="caisse" id="caisse2" value="caisse2">
                <label class="form-check-label" for="caisse2">Caisse 2</label>
            </div>
        </div>
        </center>
        <button type="submit" class="btn btn-custom">Valider</button>
    </form>

    <!-- Bootstrap JS (optional, if you need interactive components) -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>