<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Breeds</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="py-5 text-center">
        <h2 class="display-2">Breeds</h2>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div>
                <a class="me-3 btn btn-outline-success" href="../Actions/Index.php">Home</a>
                <a class="me-3 btn btn-outline-success" href="../Actions/Breeds.php">Breeds</a>
                <a class="btn btn-outline-success" href="../Actions/Favourites.php">Favourites</a>
            </div>
            <?php include_once 'SettingForm.php'?>
        </div>
    </nav>
    <div class="row mt-3">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Origin</th>
                <th scope="col">Temperament</th>
                <th scope="col">Description</th>
                <th scope="col">Life_span (years)</th>
                <th scope="col">Weight (kg)</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($breeds as $breed): ?>
                <tr>
                    <td><?= $breed->getName() ?></td>
                    <td><?= $breed->getOrigin() ?></td>
                    <td><?= $breed->getTemperament() ?></td>
                    <td><?= $breed->getDescription() ?></td>
                    <td><?= $breed->getLifeSpan() ?></td>
                    <td><?= $breed->getWeight() ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
