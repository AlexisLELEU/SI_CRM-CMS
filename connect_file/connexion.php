

<?php
session_start();

require_once 'connect.php';

if (!empty($_SESSION)){
    header('Location: ../index.php');
}

if (isset($_POST['form_connectAdmin'])){

    $email = htmlentities($_POST['email']);
    //$passW_connect = sha1($_POST['passW_connect']);
    $passW_connect = $_POST['passW_connect'];

    if (!empty($email) AND !empty($passW_connect)){

        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $req_user = "SELECT `id_user`,`firstname`,`lastname`,`email`, `password` FROM user WHERE `email`= :email AND `password`=:passW_connect";
            $co_user = $pdo->prepare($req_user);
            $co_user->bindValue(':email', $email, PDO::PARAM_STR);
            $co_user->bindValue(':passW_connect', $passW_connect, PDO::PARAM_STR);
            $co_user->execute();
            
            $userExist = $co_user->rowCount();
    
            if ($userExist == 1){
                
                $userInfo = $co_user->fetch();
                $_SESSION['email'] = $userInfo['email'];
                $_SESSION['id'] = $userInfo['id_user'];
    
                header('location: ../index.php');

            } else {
                $erreur = "L'email ou le mot de passe est incorrect.";
            }
        } else {
            $erreur = "Veuillez entrer un email valide.";
        }
    } else {
        $erreur = 'Tout les champs doivent être complétés.';
    }
}
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <main>
        <div class="logOn-container">
            <div class="logOn-container__title">
            </div>
            <div class="logOn-container__form">
                <h3 class='logOn-form__title'>Connection</h3>
                <form class='logOn-form' method="post" action="">
                    <label class='logOn-form__label' for="email">E mail</label>
                    <input class='logOn-form__input' type="text" name="email" placeholder="email">
                    <label class='logOn-form__label' for="passW_connect">Mot de passe</label>
                    <input class='logOn-form__input' type="password" name="passW_connect" placeholder="mot de passe">
                    <p class='logOn-form__paragraphe'>Mot de passe oublié ?</p>
                    <input class='logOn-form__input logOn-form__input--button' type="submit" name="form_connectAdmin" value="Se connecter">
                    <p class='logOn-form__paragraphe'>Un problème de connection ? Vous pouvez nous contactez par mail ou par téléphone au 01 12 13 14 15</p>
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
    <script src='../js/app.js'></script>
</body>
</html>











