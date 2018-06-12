<?php

session_start();

if (empty($_SESSION)){
    header('Location: ../index.php');
}


var_dump($_SESSION);

if (isset($_SESSION['id'])) {
    ?>
        <a href="logOut.php">Se deconnecter</a><br>   
                   
    <?php
}










