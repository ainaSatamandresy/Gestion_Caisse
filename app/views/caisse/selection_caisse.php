<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Homepage</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/shop-homepage.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <form action="" class="custom-form row g-3 align-items-end">
            <div class="col-auto">
                <label for="caisse" class="form-label">Select Register</label>
                <select name="caisse" id="caisse" class="form-select">
                    <option value="" selected disabled>Choose a register...</option>
                    <option value="caisse1">Register 1</option>
                    <option value="caisse2">Register 2</option>
                </select>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-custom">Submit</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (optional, if you need interactive components) -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>