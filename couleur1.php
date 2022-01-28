<?php
session_start();
if (isset($_SESSION['couleur'])) {?>
    <style>
        body {
            background-color: <?=$_SESSION['couleur']?>;
        }
    </style>
    <?php
}