<?php

$fichier = fopen("date de mise a jour" , "c");

fwrite($fichier, "Derniére mise a jour le 07/04/2020 à 10:00 ".PHP_EOL);

fclose($fichier);


