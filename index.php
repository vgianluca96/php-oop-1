<?php

class Movie
{
    public $title;
    public $genre;
    public $poster;
}


$movie1 = new Movie();
$movie1->title = 'star wars';
$movie1->genre = 'action';
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

    <div class="container py-4">
        <div class="row row-cols-6">
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
                            <?php
                            echo $movie1->genre;
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>