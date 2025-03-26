<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Homepage</title>
    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        body {
            background: #f5f5e9; /* Solid beige */
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .custom-form {
            background: #ffffff; /* White background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-left: 10px solid #8fbc8f; /* Thicker khaki green line (~1cm) */
            width: 400px; /* Slightly wider form */
        }
        .form-label {
            color: #5c4033; /* Brown text */
            font-size: 1.5rem;
            font-weight: 500;
            text-align: center;
            margin-bottom: 20px;
        }
        .radio-group {
            display: flex;
            flex-direction: column;
            gap: 15px; /* Space between radio options */
        }
        .form-check-input {
            accent-color: #8fbc8f; /* Khaki green for radio buttons */
            transform: scale(1.5); /* Larger radio buttons */
            margin-right: 10px;
        }
        .form-check-label {
            color: #5c4033; /* Brown text */
            font-size: 1.25rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        .form-check-input:checked + .form-check-label {
            color: #8fbc8f; /* Khaki green when selected */
            font-weight: 500;
        }
        .btn-custom {
            background: #ffffff; /* White button */
            color: #5c4033; /* Brown text */
            font-size: 1.25rem;
            padding: 10px 25px;
            border: 2px solid #d9d2b6; /* Beige border */
            border-radius: 6px;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 25px;
        }
        .btn-custom:hover {
            background: #d9d2b6; /* Beige on hover */
            color: #5c4033;
            box-shadow: 0 3px 10px rgba(92, 64, 51, 0.2);
        }
    </style>
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