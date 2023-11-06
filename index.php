<?php
  include __DIR__ . '/Models/classMovie.php';
  include __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

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
  <title>Php OOP </title>
</head>
<body>
  <main>
    <div class="container">
      <div class="row mt-5">

      <?php foreach ($movies as $movie): ?>
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

</body>
</html>