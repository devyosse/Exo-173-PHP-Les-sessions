<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="script.php" method="post">
        <select name="nom" size="1">
            <option value="">--Please choose an option--</option>
            <option value="red">red</option>
            <option value="blue">blue</option>
            <option value="green">green</option>
            <option value="black">black</option>
            <option value="white">white</option>
        </select>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>