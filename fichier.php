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

$form = [$_POST['titre'], $_POST['ingredients'], $_POST['etapes'], $_POST['difficulte']];

$formulaire = fopen("recup.csv", "a+");

fputcsv($formulaire, $form, ",");


fclose($formulaire);











?>

<!-- Exo 4 -->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>formulaire</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
<section>
            <h2>Créez votre recette </h2>
            <form action="fichier.php" method="post">
                <p>
                    <label for="titre">Titre de la recette</label>
                    <input type="text" id="titre" name="titre" placeholder="">
                </p>

                <p>
                    <label for="ingredients">Les ingredients</label>
                    <input type="text" id="ingredients" name="ingredients" placeholder="">
                </p>

                <p>
                    <label for="ingredients">Les étapes</label>
                    <input type="text" id="etapes" name="etapes" placeholder="">
                </p>

                <p>Difficulté /5 : 
                    <label for="rad0">0</label>
                    <input type="radio" id="rad0" name="difficulte" value="0">
                    <label for="rad1">1</label>
                    <input type="radio" id="rad1" name="difficulte" value="1">
                    <label for="rad2">2</label>
                    <input type="radio" id="rad2" name="difficulte" value="2">
                    <label for="rad3">3</label>
                    <input type="radio" id="rad3" name="difficulte" value="3">
                    <label for="rad4">4</label>
                    <input type="radio" id="rad4" name="difficulte" value="4">
                    <label for="rad5">5</label>
                    <input type="radio" id="rad5" name="difficulte" value="5">
                </p>

                <p><input type="submit" value="Envoyer">
                </p>
            </form>
        </section>

</html>


