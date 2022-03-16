<?php
include("./lesdeux/header.php");
session_start();
require 'config.php';

?>

<!-- Utilisation d'<article> destinée à être distribuée ou réutiliser de manière indépendante -->


<article class="contact">

    <!--Ajout de h2 pour dimensionner une taille de police équivalent à un titre   -->
    <h2> Inscription</h2>

    <!-- Utilisation de l'élément form afin de créer un fomrulaire contenant des intéractions 
   permetteant à l'admin de fournir des infoirmations  -->
    <form action="inscription_traitement.php" method="POST">
        <!-- Utilisation de <div> pour diviser du contenu  -->
        <div>

            <!-- Utilisation d'<input> permettant à l'admin de saisir des données 
                    dépendant de la valeur indiquée dans son attribut type   -->

            <input type="text" name="nom" placeholder="Nom">

            <input type="text" name="prenom" placeholder="Prenom">
            <input type="text" name="type" placeholder="Type">

            <input type="email" name="email" placeholder="Email">


            <input type="password" name="password" placeholder="Mot de passe">


            <input type="text" name="pseudo" placeholder="Pseudo">



        </div>

        <!-- Utilisation de <button> permettant de soumettre des fomrulaires ou 
    n'importe ou n'importe ou dans le document  -->


        <button class="submit" class="btn btn-primary btn-block">Inscription</button>

    </form>
    </div>




















    <?php
    include("./lesdeux/footer.php");
    ?>