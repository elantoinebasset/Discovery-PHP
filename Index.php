<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 //Le $ me permet de créer une varaible (qui contient des informations) 
//  $tableau = ["antoine", "basset"];
//  echo"mon nom est $tableau";


 // scalar type (contient une value)
 //$string est un texte
 //$int est un nombre, ATTENTION écrire $int = 121321 sans "" car aussinon cela devient un ecris pas un chiffre
 //$float est un nombre avec des décimals  (2.1524)
 //$bool est un true ou false (je connais) 1 = true 0 = false meme si true et false suffisent 

// Array type (contient plusieurs value)
// $array = array("antoine","basset"); (ici le $array peut être renommé)
// $array = ["antoine", "basset"];

//object type 
//$object = new Car();


//Les supers globales
// $_COOKIE
// $_ENV
// $_FILES
// $_GET
// $_POST
// $_SERVER
// $_REQUEST
// $_SESSION


//Comment envoyer des infos vers un autre docs 
//<form action="nom du fichier.php (le chemin SANS / AU DEPART)" method="post ou get "></form>
  ?>
<form action="FormHandler.php" method="post">
  <label for="Nom"> le nom </label>
  <input type="text" id="Nom" name="Nom" placeholder="Votre nom">
  <br>

    <label for="test"> Test pour voir </label>
    <select name="test" id="test">
      <option value="test1">test1</option>
      <option value="test2">test2 </option>
    </select>
    <button type="submit">Submit</button>
</form>

<form action="Operator.php">
    <input type="submit" value="Operator" />
</form>

<form action="Control_Structure.php">
    <input type="submit" value="Control_Structure" />
</form>

<form action="Calculatrice/Calculatrice.php">
    <input type="submit" value="Calculatrice" />
</form>

<form action="Array.php">
    <input type="submit" value="Array" />
</form>

</body>
</html>
