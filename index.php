<?php
try {
    require_once __DIR__ . '/Traits/Published_year.php';  
    require_once __DIR__ . '/Models/Production.php';
    require_once __DIR__ . '/Models/Movie.php';
    require_once __DIR__ . '/Models/TvSerie.php';
    require_once __DIR__ . '/db.php';

    $La_dolce_vita->addActor('Vahid Ban');
    $La_dolce_vita->removeActor('Marcello Mastroianni');
    
} catch (Exception $e) {
    $error = $e->getMessage();
}
 

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
            <?php if(isset($error)): ?>
                <div class="alert alert-secondary mt-5 pb-5 text-danger fs-2 fw-bold " role="alert">
                    <?php echo $error ?>
                </div>
            <?php else: ?>
                <div class="row mt-5">

                <?php foreach ($productions as $production): ?>

                    <div class="col-4 mt-4">
                        <div class="card p-3">
                            <h1 class="text-center text-danger"><?= $production->title ?></h1>
                            <small class="fw-bold fs-5">Descrizione:</small>
                            <p><?= $production->description ?></p>
                            <img class="img-fluid" src="<?= $production->img_url ?>" alt="immagine">
                            <?php if ($production instanceof Movie): ?>
                                <p><span class="fw-bold">Anno di pubblicazione:</span> <?= $production->published_year ?></p>
                                <p><span class="fw-bold">Durata:</span> <?= $production->running_time ?></p>
                                <p class="fw-bold fs-5">Cast:</p>
                                <ul class="list-unstyled">
                                    <?php foreach ($production->cast as $actor): ?>
                                        <li><?= $actor ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <p class="fw-bold fs-5">Generi:</p>
                                <ul class="list-unstyled">
                                    <?php foreach ($production->genre as $genre): ?>
                                        <li><?= $genre ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php elseif ($production instanceof TvSerie): ?>
                                <p><span class="fw-bold">Primo episodio:</span> <?= $production->aired_from_year ?></p>
                                <p><span class="fw-bold">Ultimo episodio:</span><?= $production->aired_to_year ?></p>
                                <p><span class="fw-bold">Numero di episodi:</span> <?= $production->number_of_episodes ?></p>
                                <p><span class="fw-bold">Nnumeri di stagioni:</span> <?= $production->number_of_seasons ?></p>
                                <p class="fw-bold fs-5">Cast:</p>
                                <ul class="list-unstyled">
                                    <?php foreach ($production->cast as $actor): ?>
                                        <li><?= $actor ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <p class="fw-bold fs-5">Generi:</p>
                                <ul class="list-unstyled">
                                    <?php foreach ($production->genre as $genre): ?>
                                        <li><?= $genre ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endforeach; ?>

                </div>
            <?php endif; ?>
        </div>
    </main>
</body>

</html>
