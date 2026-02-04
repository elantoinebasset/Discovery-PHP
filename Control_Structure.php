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