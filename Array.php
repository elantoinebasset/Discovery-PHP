<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
//Les arrays sont une structure de data qui permet de gérer plusieurs values dans une variable.
// $fruits = array("pomme", "banane", "raisin");
$fruits =[
    "pomme", // index de 0
    "banane", // index de 1
    "raisin" //index de 2
    ];
    unset($fruits[0]); //Ici j'interdis tout code qui vient après et qui demande a avoir l'index 1 

    echo $fruits[1]; //ici on echo le array nommé fruits et l'index nommé 1
    //Attention si je me referre à un array alors je dois toujours mettre les [] behind

    echo "<br>";

    $fruits[] = "Orange"; // Ici j'appelle a nouveau le array et je lui rajoute une info, alors on fait + 1 dans l'index 
    echo $fruits[3];

    echo "<br>";

//Associative Array
$Taches =[
    "Recherche" => "Antoine", //Ici j'assigne la key recherche a Antoine
    "Travail" => "Maxime",
    "Construit" => "Olivier",
    "Gagne" => "Myriam",
];
echo $Taches["Recherche"]; 
// print_r($Taches); //print_r me permet juste de voir mon array 
// echo count($Taches); // compte le nombre d'array 
// echo sort($Taches); // cela organise d'une autre facon l'array

    echo "<br>";
$animaux = [
    array("chien","chat"),
    array("oiseau","ours"),
    "lapin",
];

echo $animaux[0 ][0]; //Ici je vais simplement chercher mon array animaux et dans mon array animaux je vais cherche l'autre array qui est le chien
// echo $vegetaux[ "autre exemple" ][0];
?>    
</body>
</html>
