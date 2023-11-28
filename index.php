<?php

class Production
{
    public $title;
    public $language;
    public $rating;

    function __construct(String $_title, $_language, $_rating)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->setRating($_rating);
    }

    public function getRating()
    {
        return $this-> rating;
    }

    public function setRating($rating)
    {
        if (is_numeric($rating)) {
            $this->rating = intval($rating);
        }else {
            echo 'Il parametro $rating non è corretto';
        }

    }
}


// il construct ci evita questi passaggi

// $shrek = new Production();
// $shrek-> title = 'Shrek';
// $shrek-> language = 'English';
// $shrek-> rating = '10';



$shrek = new Production('Shrek','English', '10');
$taxi_driver = new Production ('Taxi Driver', 'English', '10');
$fantozzi = new Production ('Fantozzi', 'Italian', '8');


$movies = [
    $shrek,
    $taxi_driver,
    $fantozzi
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
   

<?php foreach($movies as $movie) { ?>

    <li>
        <div> <strong>Titolo:</strong> <?php echo $movie->title ?> </div>
        <div> <strong>Lingua:</strong> <?php echo $movie->language ?> </div>
        <div> <strong>Voto:</strong> <?php echo $movie->getRating() ?> </div>
    </li>

<?php } ?>

        </ul>
    </div>

</body>
</html>


