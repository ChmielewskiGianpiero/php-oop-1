<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';



$movie = new Movie('Shrek','English', '10',20, 20);
$serie = new Serie ('Breaking Bad', 'English', '10', 2);




$productions = [
    $movie,
    $movie,
    $movie,
    $movie,
    $movie,
    $serie,
    $serie,
    $serie,
    $serie,
    $serie
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <div class='container'>
        <h1>LISTA DI FILM</h1>
        <ul>

<?php foreach($productions as $product) { ?>

    <li>
        <div> <strong>Titolo:</strong> <?php echo $product->getTitle() ?> </div>
        <div> <strong>Lingua:</strong> <?php echo $product->getLanguage() ?> </div>
        <div> <strong>Voto:</strong> <?php echo $product->getRating() ?> </div>
    </li>

<?php } ?>

        </ul>
    </div>

</body>
</html>


