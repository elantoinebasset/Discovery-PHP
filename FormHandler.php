<?php

// var_dump($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"] == "POST")/* Si je recoie la requête METHOD via le serveur qui est un POST alors j'autorise*/ {
    $Nom = htmlspecialchars($_POST["Nom"]); //ICI le POST cherche le name et uniquement le name  (name="Nom")
    $test = htmlspecialchars($_POST["test"]);

    if (empty($Nom) || empty($test)) {
        exit("");
        header("Location: Index.php");
        //ici, cela permet de s'assurer qu'une information est bien écrite pour envoyer le message au serveur

    }

    echo $Nom, $test;
    header("Location: Index.php"); //cela permet de revoyer sur la meme page (en gros l'utilisateur ne peux pas voir les infos
    //qui a donné au serveur (c'est une sécurité sur par exemple la page du lien contient des infos importantes))
}else{
    header("Location: Index.php");
};