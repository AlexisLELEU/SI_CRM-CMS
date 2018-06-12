<?php

session_start();

if (empty($_SESSION)){
    header('Location: ../index.php');
}


var_dump($_SESSION);

if (isset($_SESSION['id'])) {
    ?>

    <html>
<head>
    <title>Espace admin</title>
    <link rel="stylesheet" href="">
    <meta charset="UTF-8">
</head>
<body>
    <main>
    <a href="logOut.php">Se deconnecter</a><br>   
        <input class="search" type="text" placeholder="search by name"/>
        <div class="result-search-container">
            <div class="result-search"></div>
            <div class="result-search-createUser">
                <a href="create.php">Create new user</a>
            </div>
        </div>     
     </main>
     <script src='../js/app.js'></script>
</body> 
</html>

<?php
}










