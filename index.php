<?php
  require_once 'Models/Production.php';
  require_once 'Models/Movie.php';
  require_once 'Models/TvSerie.php';
  require_once 'db.php';
  

   
?>


<!doctype html>
<html lang="en">
<head>

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

                <?php foreach ($productions as $production): ?>

                    <div class="col-4 mt-4">
                        <div class="card p-3">
                            <h1 class="text-center text-danger"><?= $production->title ?></h1>
                            <small class="fw-bold fs-5">Descrizione:</small>
                            <p><?= $production->description ?></p>
                            <img class="img-fluid" src="<?= $production->img_url ?>" alt="immagine">
                            <?php if ($production instanceof Movie): ?>
                                <p>Published Year: <?= $production->published_year ?></p>
                                <p>Running Time: <?= $production->running_time ?></p>
                            <?php elseif ($production instanceof TvSerie): ?>
                                <p>Aired From: <?= $production->aired_from_year ?></p>
                                <p>Aired To: <?= $production->aired_to_year ?></p>
                                <p>Number of Episodes: <?= $production->number_of_episodes ?></p>
                                <p>Number of Seasons: <?= $production->number_of_seasons ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </main>
</body>

</html>