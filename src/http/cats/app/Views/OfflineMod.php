<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Offline mod error</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <p class="fs-3"> <span class="text-danger">Opps!</span> You're in offline mod.</p>
        <p class="lead">
            <?= $error ?>
        </p>
        <a href="../Actions/Breeds.php" class="btn btn-success">Breeds</a>
    </div>
</div>
</body>
</html>
