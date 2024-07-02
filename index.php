<?php 
require_once __DIR__ . "/classi/Movie.php";
require_once __DIR__ . "/classi/Address.php";
// Sto creando due oggetti diversi.

$movie = new Movie("Iron-man", "Iron Man, il cui vero nome è Tony Stark, è un personaggio dei fumetti statunitensi pubblicati da Marvel Comics", new Address("5 stelle", "10 milioni di euro"));

$movieSeries = new Movie("CHICAGO P.D.", "Chicago P.D. è una serie televisiva statunitense creata da Dick Wolf, Derek Haas, Michael Brandt e Matt Olmstead per la NBC, trasmessa a partire dall'8 gennaio 2014", new Address("3 stelle", "2 milioni di euro"));

var_dump($movie, $movieSeries);

// Stampo elemento statico (Nome classe. Operatore :: Nome variabile)
var_dump(Movie::$years);

?>