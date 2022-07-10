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
<div class="container-sm">
    <div class="py-5 text-center">
        <h2 class="display-2">Books</h2>
    </div>
    <?php if (isset($error)): ?>
        <div class="row">
            <div class="alert alert-danger" role="alert">
                <?=$error?>
            </div>
        </div>
    <?php endif; ?>
    <form action="" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                   value="<?= isset($book) ? $book->getTitle() : '' ?>">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author"
                   value="<?= isset($book) ? $book->getAuthor() : '' ?>">
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <input type="text" class="form-control" id="publisher" name="publisher"
                   value="<?= isset($book) ? $book->getPublisher() : '' ?>">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" min="1900" max="<?= date('Y') ?>>" step="1" class="form-control" id="year" name="year"
                   value="<?= isset($book) ? $book->getYear() : '' ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</div>
</body>
</html>
