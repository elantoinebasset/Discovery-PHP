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
/*Un SWITCH est une structure de contrôle qui permet de comparer une variable
à plusieurs valeurs possibles et d'exécuter du code différent selon le cas.
C'est une alternative plus lisible aux multiples if/elseif quand on teste
la même variable contre plusieurs valeurs.
*/

switch ($a) {
    case 1:
        echo "le premier cas est correct";
        break;
    case 3:
        echo "le deuxieme cas est correct";
        break;
    default: "Aucuns des cas n'est correct";
}


echo "<br>";
// Les Matchs


$favcolor = "chien"; //Le match recherche la donnée ecrite ici qui peux être ensuite choisi dans la variable 

$text = match($favcolor) {
  "red" => "Your favorite color is red!",
  "blue" => "Your favorite color is blue!",
  "green" => "Your favorite color is green!",
  "chien" => "le chien est heureux",
  1,2,3=> "un chiffre", //ATTENTION les chiffres ne sont pas entre "" donc si je veux qu'ils soient choisis je dois faire $favcolor = 1
  default => "Your favorite color is neither red, blue, nor green, nor the chien!"
};
//POUR LE MATCH LA VIRGULE EST IMPORTANTE , pour TOUTES LES PHRASES sauf la derniere.
echo $text;