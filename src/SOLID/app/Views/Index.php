<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books</title>
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
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav me-auto mb-2 mb-lg-0"></div>
                <form class="d-flex" method="get" action="">
                    <input name="title" class="form-control me-2" type="search" placeholder="Search by title"
                           aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="row mt-3">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Type
                    <a class="ms-1 text-dark text-decoration-none" href="<?= sprintf($linkPattern, 'type', 'asc') ?>">&uArr;</a>
                    <a class="ms-1 text-dark text-decoration-none" href="<?= sprintf($linkPattern, 'type', 'desc') ?>">&dArr;</a>
                </th>
                <th scope="col">Title
                    <a class="ms-1 text-dark text-decoration-none" href="<?= sprintf($linkPattern, 'title', 'asc') ?>">&uArr;</a>
                    <a class="ms-1 text-dark text-decoration-none" href="<?= sprintf($linkPattern, 'title', 'desc') ?>">&dArr;</a>
                </th>
                <th scope="col">Author</th>
                <th scope="col">Publisher
                    <a class="ms-1 text-dark text-decoration-none"
                       href="<?= sprintf($linkPattern, 'publisher', 'asc') ?>">&uArr;</a>
                    <a class="ms-1 text-dark text-decoration-none"
                       href="<?= sprintf($linkPattern, 'publisher', 'desc') ?>">&dArr;</a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= $book->getType()->getName() ?></td>
                    <td><a class="text-dark text-decoration-none" href="../Actions/Show.php?id=<?=$book->getId()?>"><?=$book->getTitle()?></td>
                    <td><?= $book->getAuthors() ?></td>
                    <td><?= $book->getPublisher()->getName() ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>
