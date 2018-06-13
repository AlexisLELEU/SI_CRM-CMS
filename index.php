<?php

session_start();

if (empty($_SESSION)){
    header('Location: connect_file/connexion.php');
}

if (isset($_SESSION['id'])) {
    ?>

    <html>
        <head>
            <title></title>
            <link rel="stylesheet" href="style/style.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="UTF-8">
        </head>
        <body>
            <header class="header">
                <nav class="header__nav">
                    <ul class="header-nav__ul">
                        <li class="header-nav__li">Accueil</li>
                        <li class="header-nav__li">Tickets</li>
                        <li class="header-nav__li">Clients</li>
                    </ul>
                </nav>
            </header>
            <main>
                <div class='search-container'>
                    <div class='search-container__search'>
                        <h3 class="search-container__title">Rechercher un client</h3>
                        <input class="search search-container__action" type="text" placeholder="Chercher un client par son nom, prénom ou téléphone"/>
                        <div class="result-search-container">
                            <div class="result-search"></div>
                        </div>     
                    </div>
                </div>

                <div class="ticket-container">
                    <div class="ticket-container__block">
                        <h3 class='ticket-block__title'>Urgences</h3>
                        <div class='ticket-block__content'>
                            
                            <div class='ticket-block__ticket'>
                                <div class='ticket-block__state'>
                                    <p class='ticket-state__ref'>#ref001</p>
                                    <p class='ticket-state__name'><i class="fas fa-user-circle"></i>Gerard</p>
                                </div>
                                <p class='ticket-block__problem'>Retour produit en attente - Problème de soudure</p>
                                <p class='ticket-block__date'>10:20 - 12/02/18</p>
                            </div>
                            <div class='ticket-block__ticket'>
                                <div class='ticket-block__state'>
                                    <p class='ticket-state__ref'>#ref001</p>
                                    <p class='ticket-state__name'><i class="fas fa-user-circle"></i>Gerard</p>
                                </div>
                                <p class='ticket-block__problem'>Retour produit en attente - Problème de soudure</p>
                                <p class='ticket-block__date'>10:20 - 12/02/18</p>
                            </div>
                            <div class='ticket-block__ticket'>
                                <div class='ticket-block__state'>
                                    <p class='ticket-state__ref'>#ref001</p>
                                    <p class='ticket-state__name'><i class="fas fa-user-circle"></i>Gerard</p>
                                </div>
                                <p class='ticket-block__problem'>Retour produit en attente - Problème de soudure</p>
                                <p class='ticket-block__date'>10:20 - 12/02/18</p>
                            </div>
                            <div class='ticket-block__ticket'>
                                <div class='ticket-block__state'>
                                    <p class='ticket-state__ref'>#ref001</p>
                                    <p class='ticket-state__name'><i class="fas fa-user-circle"></i>Gerard</p>
                                </div>
                                <p class='ticket-block__problem'>Retour produit en attente - Problème de soudure</p>
                                <p class='ticket-block__date'>10:20 - 12/02/18</p>
                            </div>
                            <div class='ticket-block__seemore'>
                                <p class='ticket-seemore__text'>Voir plus</p>
                            </div>
                            
                        </div>

                    </div>

                    <div class="ticket-container__block">

                    <h3 class='ticket-block__title'>Ajoutés récemments</h3>
                        

                    </div>
                </div>






            <a href="./connect_file/logOut.php">Se deconnecter</a><br>   
                
            </main>
            <script src='js/app.js'></script>
        </body> 
    </html>

<?php
}
