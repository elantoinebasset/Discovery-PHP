<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$string1 = "Salut ca va";
echo strlen($string1); // ici strlen echo le nombre de lettre, caractère, espace etc present.
echo strpos($string1, "c"); //ici je recherche la position de c dans string1
echo "<br>";
echo str_replace("Salut","Coucou", $string1);//ici je cherche Salut et je le remplace par Coucou

echo "<br>";
$numb1 = -5.5;
echo abs($numb1); //valeur absolue en bref - devient +
echo round($numb1); // -5.5 devient -6
echo pow(2, 10); // pow = Power of chiffre (en gros c'est au carré)
echo sqrt(100); // square root 100 = 10
echo rand(0,10); // nombre aléatoire entre 0 et 10
echo date("Y-m-d")

?>
</body>
</html>