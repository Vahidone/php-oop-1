<?php
  require_once __DIR__ . '/Models/classMovie.php';
  require_once  __DIR__ . '/db.php';

?>


<!doctype html>
<html lang="en">
<head>

    <!-- link AXIOS  -->
        <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
        <!-- link VUE.JS cdn  -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <!-- link FONT AWESOME  -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous"
    />

    <!-- link BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <!-- link CSS  -->
        <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop 1</title>
</head>

<body>

    <main>
        <div class="container text-black">
            <div class="row mt-5">

                <?php foreach ($movies as $movie) : ?>

                    <div class="col-4">
                        <div class="card p-2">
                            <h1 class="text-center text-danger"><?= $movie->title ?></h1>
                            <small class="fw-bold">Descrizione:</small>
                            <p><?= $movie->getDescription() ?></p>
                            <img class="img-fluid" src="<?= $movie->getImg() ?>" alt="immagine">
                            <span class="fw-bold">Cast: </span>
                            <ul>
                                <?php foreach ($movie->getCast() as $actor) : ?>
                                    <li><?= $actor; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <small class="fw-bold">Genere: </small>
                            <?php foreach ($movie->getGenre() as $genre) : ?>
                                <span><?= $genre; ?> </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                
            </div>
        </div>

    </main>

</body>

</html>