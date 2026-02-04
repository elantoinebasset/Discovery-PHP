<?php

//Ici il me suffit juste de changer le $bool de true a false ainsi je peux switch entre les 2 variables 
$bool = true;
$a = 1;
$b = 2;

if ($a < $b && !$bool) {
echo "la premiere condition est vrai";
} else if ($bool) {
    echo "la deuxieme est vrai";
} 
// les else if peuvent être stackés les unes aprés les autres car tant qu'il y en a pas une qui est juste alors elles continuent

else {
    echo "elles sont toutes mauvaises";
} 


echo "<br>";
// Les switchs

switch ($a) {
    case 1:
        echo "le premier cas est correct";
        break;
    case 3:
        echo "le deuxieme cas est correct";
        break;
    default: "Aucuns des cas n'est correct";
}