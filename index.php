<?php

class Movie
{
    public $title;
    public $genres = [];
    public $poster;
}


$movie1 = new Movie();
$movie1->title = 'star wars';
$movie1->genres = ['action', 'drama'];
$movie1->poster = 'https://i.ebayimg.com/images/g/tCwAAOSw4IVijPFE/s-l1600.jpg';



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="text-bg-light">

    <div class="text-center text-uppercase py-3">
        <h1>movies</h1>
    </div>

    <div class="container py-3">
        <div class="row row-cols-5">
            <div class="col">
                <div class="card text-bg-dark">
                    <img src="<?php echo $movie1->poster; ?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                            echo $movie1->title;
                            ?>
                        </h5>
                        <p class="card-text">
                            <strong>Genere:</strong>
                        <ul>
                            <?php
                            foreach ($movie1->genres as $genre) {
                            ?>
                                <li>
                                    <?php echo $genre; ?>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>