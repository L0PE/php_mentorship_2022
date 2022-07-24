<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="py-5 text-center">
        <h2 class="display-2">Books</h2>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="me-3 btn btn-outline-success" href="../Actions/Index.php">Home</a>
            <?php if (!is_null($book->getPathToFile())): ?>
                <a class="me-3 btn btn-outline-success" href="../Actions/Export.php?id=<?=$book->getId()?>">Export</a>
            <?php endif; ?>
        </div>
    </nav>
    <div class="row mt-3">
        <div class="col-sm-4">
            <img src="https://picsum.photos/300/300" class="img-thumbnail img-fluid" alt="...">
        </div>
        <div class="col-sm-8">
            <h1><?=$book->getTitle()?></h1>
            <h5><?=$book->getType()->getName()?></h5>
            <h5><?=$book->getPublisher()->getName()?></h5>
            <h5><?=$book->getAuthors()?></h5>
            <p><?=$book->getDescription()?></p>
        </div>
    </div>
</div>
</body>
</html>
