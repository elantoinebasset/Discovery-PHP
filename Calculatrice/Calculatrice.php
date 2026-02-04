<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
    <input type="number" name="number1" placeholder="number 1">
    <select name="Operator">
        <option value="add">+</option>
        <option value="minus">-</option>
    </select>
    <input type="number" name="number2" placeholder="number 2">
    <button name="Calculer"> Calculer </button>
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            //Recupere la data de INPUT
            $numb1 = filter_input(INPUT_GET, "number1", FILTER_SANITIZE_NUMBER_FLOAT);
            $numb2 = filter_input(INPUT_GET, "number2", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_GET["Operator"]);
            
            //securité
            $errors = false;
            if (empty($numb1) || empty($numb2)) {
                exit(" Veuillez remplir les cases ");
                $errors = true;
            }
            if (!is_numeric($numb1) || !is_numeric($numb2)) {
                exit("Veuillez écrire des chiffres");
                $errors = true;
            }

            if (!$errors){
                $Calculate = match ($operator) {
                    "add" => $numb1 + $numb2,
                    "minus"=> $numb1 - $numb2,
                };
                echo $Calculate;
            }
        }
    ?>
</body>
</html>