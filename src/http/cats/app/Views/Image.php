<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="py-5 text-center">
        <h2 class="display-2">Cat</h2>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div>
                <a class="me-3 btn btn-outline-success" href="../Actions/Breeds.php">Breeds</a>
                <a class="me-3 btn btn-outline-success" href="../Actions/Index.php">Next</a>
                <a class="btn btn-outline-success" href="../Actions/Favourites.php">Favourites</a>
            </div>
            <?php include_once 'SettingForm.php'?>
        </div>
    </nav>
    <?php if (!is_null($image)): ?>
        <img
                src="<?= $image['url'] ?>"
                class="m-3 w-50 rounded mx-auto d-block"
                alt="Palm Springs Road"
        />
        <form method="post" action="../Actions/AddFavourites.php">
            <input type="hidden" name="image_id" value="<?= $image['id'] ?>">
            <button type="submit" name="submit" class="btn btn-success mx-auto d-block mt-3">Add to favourite</button>
        </form>
    <?php endif; ?>
</div>
</body>
</html>
