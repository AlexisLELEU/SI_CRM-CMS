<?php
session_start();

var_dump($_SESSION['email']);

if (isset($_SESSION['id']) AND $userInfo['id'] == $_SESSION['id']) {
                    ?>

        <a href="logOut.php">Se deconnecter</a><br>
                        

                        
        <?php
                    }










