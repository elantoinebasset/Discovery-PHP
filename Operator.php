<?php
$a = "Salut";
$b = "le monde";
$c = $a . " " . $b;  // le . permet de connecter des infos entre elle

echo $c;

echo "<br>";

//le + - etc sont des operators arithmetic
echo 1 + 2;
echo 10 % 3;

echo"<br>";

echo (1 + 2) *3; // ici les () permettent de ordonné le calcul de 1 + 2 en premier (des maths logiques)

echo "<br>";







// Les operators d'assignement 
$Data = 2;
$Data += 4; // ici le += fait 2 + 4 puis applique le calcul donc 6
echo $Data;

echo "<br>";








//Les operators de comparison
/*

= / == / ===
!= / !== / !=== 
+= / -= / *= /
< / > / <= / >=

*/ 

$test1= 5;
$test2= 6; /*ici mettre le 6 entre "" sera toujours valide car il n'y a que 2 =. Si je veux que le type de donnée soit vraiment identique 
           il faut que je mette === */  

if ($test1 == $test2) {
    echo "Test 1 est bien égale a test 2 ";
}

// Ici si test1 est = à test2 alors le message apparaitra 
// != veut dire not true

echo "<br>";






//Les operators logical
// Ce sont :            and / or   qui peuvent être ecris sous la forme && et ||
$test3= 1;
$test4= 2;

if ($test1 == $test2 && $test3 == $test4) {
    echo "Tous les test sont égaux ";
}

echo "<br>";






// les opérators d'incrementation et de decrementation
// ici le --Num fais moins et ++Num fais plus 

$Num = 1;
echo ++$Num;
echo $Num++; // ici on ajoute a $Num +1 mais il n'est pas imédiatement ajouté dans le navigateur, il sera sur le suivant $Num
echo $Num; 