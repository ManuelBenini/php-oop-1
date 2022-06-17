<?php

  require_once __DIR__ . '/classes/movie.php';

  $movies = [];

  $movie_1 = new Movie('Oldboy', 'Park Chan-wook');
  $movie_1->setGenre(['thriller', 'azione', 'noir']);

  # echo 'Film 1' . '<br>';
  # var_dump($movie_1);
  $movies[] = $movie_1;

  # echo 'Lista film' . '<br>';
  # var_dump($movies);

  $movie_2 = new Movie('jujutsu kaisen 0', 'Gege Akutami');
  $movie_2->setGenre(['anime', 'cinema fantastico', 'azione', 'avventura']);

  # echo 'Film 2' . '<br>';
  # var_dump($movie_2);
  $movies[] = $movie_2;

  # echo 'Lista film' . '<br>';
  # var_dump($movies);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
</head>
<body>

  <?php foreach($movies as $movie): ?>
    <h1><?php echo $movie->title ?> di <?php echo $movie->author ?></h1>
    <h3>Generi:</h3>
    <ul>
      <?php foreach($movie->getGenre() as $genre): ?>
      <li><?php echo $genre ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endforeach; ?>

</body>
</html>