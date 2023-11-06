<?php
  require_once __DIR__ . '/Models/classMovie.php';
  require_once  __DIR__ . '/db.php';

?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <main>
        <div class="container">
            <div class="row mt-5">

                <?php foreach ($movies as $movie) : ?>

                    <div class="col-4">
                        <div class="card p-2">
                            <h1>title: <?= $movie->title ?></h1>
                            <small>description:</small>
                            <p><?= $movie->getDescription() ?></p>
                            <img class="img-fluid" src="<?= $movie->getImg() ?>" alt="immagine">
                            <span>cast: </span>
                            <ul>
                                <?php foreach ($movie->getCast() as $actor) : ?>
                                    <li><?= $actor; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <small>genre: </small>
                            <?php foreach ($movie->getGenre() as $genre) : ?>
                                <span><?= $genre; ?> </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

                <ul>
                    <?php foreach ($movies as $movie) : ?>
                        <li><?= $movie->getMovieDetails(); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

    </main>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>