<?php
session_start();

session_start();
$choice = $_SESSION['couleur']= $_POST['choice'];
?>
<style>
    body {
        background-color: <?=$choice?>;
    }
</style>