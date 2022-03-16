<?php
// Utilisation de la session permettant de modifier des variables globales qui permet de lire et de modifier les informations sauvegardés en SESSION  
//elle fonctionne comme un tableau 
session_start();

$_SESSION['role'] = 'administrateur';
include("./lesdeux/header.php");
require 'config.php';
// include('function.php');
// include('connexion_traitement.php');

?>

<!-- Utilisation d'<article> destinée à être distribuée ou réutiliser de manière indépendante  -->

<article class="contact">



    <!--Ajout de h2 pour dimensionner une taille de police équivalent à un titre   -->

    <h2 class="text-center">Connexion</h2>


    <!-- Utilisation de l'élément form afin de créer un fomrulaire contenant des intéractions 
   permetteant à l'admin de fournir des infoirmations  -->

    <form action="connexion_traitement.php" method="POST">


        <!-- Utilisation d'<input> permettant à l'admin de saisir des données 
                    dépendant de la valeur indiquée dans son attribut type   -->

        <div>
            <input type="email" placeholder="entrer le mail" name="email">
            <input type="password" place holder="Mot de passe" name="password" required>



        </div>

        <!-- Utilisation d'<button> permettant de soumettre des formulaires ou n'importe ou dans un doc  -->
        <button button="connexion">Connexion</button>
        </div>
    </form>
    <p class="text-center"><a href="index.php">Inscription</a></p>
    </div>

</article>
<?php










include("./lesdeux/footer.php");
?>