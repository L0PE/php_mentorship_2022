<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Favourites</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style type="text/css">
        .photo-gallery .photos {
            padding-bottom: 20px;
        }

        .photo-gallery .item {
            padding-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="py-5 text-center">
        <h2 class="display-2">Favourites</h2>
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
</div>
<div class="photo-gallery m-3">
    <div class="container">
        <div class="row photos">
            <?php foreach ($favourites as $favourite): ?>
                <div class="col-sm-6 col-md-4 col-lg-3 item">
                    <img class="img-fluid" src="<?= $favourite['image'] ?>">
                    <form method="post" action="../Actions/RemoveFavorite.php">
                        <input type="hidden" name="id" value="<?= $favourite['id'] ?>">
                        <button type="submit" name="submit" class="btn btn-success mx-auto d-block mt-3">Remove</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</body>
</html>
