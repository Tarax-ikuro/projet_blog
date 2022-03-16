<?php
// Insertion de la structure de controle include permettant d'inserer les fichiers correspondantes dans la page actuelle 
// Permet de demarrer la session 
session_start();
include("./lesdeux/header.php");
require_once 'config.php';
include_once("./fonctions/addArticleAdmin.php");
include_once("requete.php")







?>


<!-- Utilisation d'<article> destinée à être distribuée ou réutiliser de manière indépendante  -->

<article class="contact">

    <!--Ajout de h2 pour dimensionner une taille de police équivalent à un titre   -->
    <h2>
        Ajouter un article
    </h2>

    <!-- Utilisation de l'élément <form> afin de créer un fomrulaire contenant des intéractions 
   permetteant à l'admin de fournir des infoirmations  -->
    <form action="./fonctions/addArticleAdmin.php" method="POST">

        <!-- Utilisation de <div> pour diviser du contenu  -->
        <div>

            <!-- Utilisation d'<input> permettant à l'admin de saisir des données 
                    dépendant de la valeur indiquée dans son attribut type   -->
            <input type="text" name="titre" placeholder="Titre">


            <!-- Utilisation de <textarea> qui permet d'éditer du texte sur un sectuer donné  -->
            <textarea type="text" name="contenu" placeholder="Resumer"></textarea>

            <input type="text" name="image" placeholder="Image">

            <textarea type="text" name="description" placeholder="Description"></textarea>



            <!-- Utilisation de <select> permettant de fournir une liste d'options parmi lesquelles l'admin pourra choisir -->
            <select name="menu" id="menu">
                <option value="1">dessert</option>
                <option value="2">plat</option>
                <option value="3">apperitif</option>

            </select>




        </div>

        <!-- Utilisation de <button> permettant de soumettre des formulaires dans n'importe ou ou dans n'omporte quel document  -->
        <button>Ajouter</button>
    </form>

</article>

<?php

// Insertion de la structure de controle include permettant d'inserer le fichier correspondant dans la page actuelle 
include("./lesdeux/footer.php");



?>