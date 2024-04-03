<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre</title>
</head>
<body>

<?php

require 'livre.php';
require 'auteur.php';

$auteur1 = new Auteur("King", "Stephen", "21-09-1947", "");
$auteur2 = new Auteur("Camus", "Albert", "07-11-1913", "04-01-1960");

$livre1 = new Livre("Shining", 576, 1977, 15.99, $auteur1);
$livre2 = new Livre("Ça", 800, 1987, 14.20, $auteur1);

$livre3 = new Livre("La peste", 288, 1972, 8.10, $auteur2);
$livre4 = new Livre("L'étranger", 191, 1942, 9.90, $auteur2);

$auteur1->afficherBibliographie();
$auteur2->afficherBibliographie();

?>
</body>
</html>