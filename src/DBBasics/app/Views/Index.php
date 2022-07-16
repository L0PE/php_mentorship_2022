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
            <a class="me-3 btn btn-outline-success" href="<?=parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)?>">Home</a>
            <a class="btn btn-outline-success" href="../Actions/store.php">Add book</a>
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
                <th scope="col">Title
                    <a class="ms-1 text-dark text-decoration-none" href="<?= sprintf($linkPattern, 'title', 'asc') ?>">&uArr;</a>
                    <a class="ms-1 text-dark text-decoration-none" href="<?= sprintf($linkPattern, 'title', 'desc') ?>">&dArr;</a>
                </th>
                <th scope="col">Author
                    <a class="ms-1 text-dark text-decoration-none" href="<?= sprintf($linkPattern, 'author', 'asc') ?>">&uArr;</a>
                    <a class="ms-1 text-dark text-decoration-none"
                       href="<?= sprintf($linkPattern, 'author', 'desc') ?>">&dArr;</a>
                </th>
                <th scope="col">Publisher
                    <a class="ms-1 text-dark text-decoration-none"
                       href="<?= sprintf($linkPattern, 'publisher', 'asc') ?>">&uArr;</a>
                    <a class="ms-1 text-dark text-decoration-none"
                       href="<?= sprintf($linkPattern, 'publisher', 'desc') ?>">&dArr;</a>
                </th>
                <th scope="col">Year
                    <a class="ms-1 text-dark text-decoration-none" href="<?= sprintf($linkPattern, 'year', 'asc') ?>">&uArr;</a>
                    <a class="ms-1 text-dark text-decoration-none" href="<?= sprintf($linkPattern, 'year', 'desc') ?>">&dArr;</a>
                </th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= $book->getTitle() ?></td>
                    <td><?= $book->getAuthor() ?></td>
                    <td><?= $book->getPublisher() ?></td>
                    <td><?= $book->getYear() ?></td>
                    <td><a class="text-primary text-decoration-none"
                           href="../Actions/update.php?id=<?= $book->getId() ?>">Update</a></td>
                    <td><a class="text-danger text-decoration-none"
                           href="../Actions/delete.php?id=<?= $book->getId() ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <nav aria-label="Navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                <a class="page-link" href="<?= sprintf($linkPattern . '&page=1', $sortBy, $sortOrder) ?>" tabindex="-1">Previous</a>
            </li>
            <?php
            for ($i = 1; $i <= $pages; $i++) :
                if (($i >= $page - 5) && ($i <= $page + 5)) : ?>
                    <li class="page-item <?= $i == $page ? 'active' : '' ?>"><a class="page-link"
                                                                                href="<?= sprintf($linkPattern . '&page=%d', $sortBy, $sortOrder, $i) ?>"><?= $i ?></a>
                    </li>
                <?php endif;
            endfor;
            ?>
            <li class="page-item <?= $page == $pages ? 'disabled' : '' ?>">
                <a class="page-link" href="<?= 1 ?>">Next</a>
        </ul>
    </nav>
</div>
</body>
</html>
