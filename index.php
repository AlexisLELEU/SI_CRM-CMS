<?php


session_start();

require_once 'connect_file/connect.php';

if (isset($_POST['form_connectAdmin'])){

    $email = htmlentities($_POST['email']);
    //$passW_connect = sha1($_POST['passW_connect']);
    $passW_connect = $_POST['passW_connect'];

    if (!empty($email) AND !empty($passW_connect)){
        
        $req_user = "SELECT `id_user`,`firstname`,`lastname`,`email`, `password` FROM user WHERE `email`= :email AND `password`=:passW_connect";
        $co_user = $pdo->prepare($req_user);
        $co_user->bindValue(':email', $email, PDO::PARAM_STR);
        $co_user->bindValue(':passW_connect', $passW_connect, PDO::PARAM_STR);
        $co_user->execute();
        
        $userExist = $co_user->rowCount();


        if ($userExist == 1){
            
            $userInfo = $co_user->fetch();
            $_SESSION['email'] = $userInfo['email'];

            header('location: connect_file/admin_space.php?id='.$_SESSION['id']);

        } else {
            $erreur = "Votre email ou votre mot de passe est incorrect !!";
        }

    } else {
        $erreur = 'Tout les champs doivent être complétés ';
    }
}


?>


<html>
<head>
    <title>Espace admin</title>
    <link rel="stylesheet" href="">
    <meta charset="UTF-8">
</head>
<body>
    <main>
        <div class="">
            <div class="">
                <form method="post" action="">
                    <table>
                        <tr>
                            <td>
                                <input type="text" name="email" placeholder="email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" name="passW_connect" placeholder="mot de passe">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="form_connectAdmin" value="se connecter">
                            </td>
                        </tr>
                    </table>
                </form>
                
            </div>
            <?php
            if (isset($erreur)){
                ?>
                <p class=""><?= $erreur ?></p>
            <?php
            }
            ?>
        </div>

    </main>




</body>
</html>
