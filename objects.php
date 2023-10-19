
<?php

$movie1 = new Movie(['action', 'drama']);
$movie1->title = 'star wars episodio I - la minaccia fantasma';
$movie1->poster = 'https://image.tmdb.org/t/p/original/PpyS3rX2RviMxmtHnXxWz0aXj1.jpg';

$movie2 = new Movie(['action', 'drama']);
$movie2->title = "star wars episodio II - l'attacco dei cloni";
$movie2->poster = 'https://i.ebayimg.com/images/g/23IAAOSw9~RiigMA/s-l1600.jpg';

$movie3 = new Movie(['action', 'drama']);
$movie3->title = 'star wars episodio III - la vendetta dei sith';
$movie3->poster = 'https://i.ebayimg.com/images/g/tCwAAOSw4IVijPFE/s-l1600.jpg';

$movie4 = new Movie(['action', 'drama']);
$movie4->title = 'star wars episodio IV - una nuova speranza';
$movie4->poster = 'https://m.media-amazon.com/images/I/81mHeGWDJpL.jpg';

$movie5 = new Movie(['action', 'drama']);
$movie5->title = "star wars episodio V - l'impero colpisce ancora";
$movie5->poster = 'https://static.posters.cz/image/750/poster/star-wars-episodio-v-l-impero-colpisce-ancora-one-sheet-i30790.jpg';

$movie6 = new Movie(['action', 'drama']);
$movie6->title = "star wars episodio VI - il ritorno dello jedi";
$movie6->poster = 'https://m.media-amazon.com/images/I/51hZiG+E6YL.jpg';


$movies = array($movie1, $movie2, $movie3, $movie4, $movie5, $movie6);
