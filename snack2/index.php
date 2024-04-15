<?php

var_dump($_GET);

$name = $_GET["name"];

$mail = $_GET["mail"];

$age = $_GET["age"];

if (strlen($name) >= 3) {
    echo ("Il nome è valido -");
    if (str_contains($mail, ".") && str_contains($mail, "@")) {
        echo (" La mail è valida -");
        echo (" Accesso riuscito");
    }
} else {
    echo ("Accesso negato");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="name" placeholder="Inserisci il tuo nome">
        <input type="email" name="mail" id="" placeholder="Isnerisci la tua mail">
        <input type="text" name="age" id="" placeholder="Inserisci la tua età">
        <input type="submit" value="Vai">
    </form>

</body>

</html>