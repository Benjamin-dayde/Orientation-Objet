<?php

$fichier = fopen("maj.txt", "r");

fwrite($fichier, "date de mise a jour 10/10/97".PHP_EOL);
fwrite($fichier, "heure de maj 00:00".PHP_EOL);

$len = "";

while ($len !== false) {
    $len = fgets($fichier);
    var_dump($len);
}

fclose($fichier);

$compteur = fopen("compteur.txt", "r");

$page = ["index.html", "plat.html", "entree.html" , "dessert.html", "recette.html", "idee.html"];

$tab = sizeof($page);

fwrite($compteur , "Vous avez ".$tab." page sur votre site ".PHP_EOL);

var_dump(fgets($compteur));


fclose($compteur);

// exo 3 /

$personnage = fopen("personnage.csv" , "r");

$valeur = ["pierre",100,20,60,30];

fputcsv($personnage, $valeur , $limite = "," );

$personnages = fgetcsv($personnage , $delimiter = ",");

var_dump($personnages);



fclose($personnage);

// exo 4 //


