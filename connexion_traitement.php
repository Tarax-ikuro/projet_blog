<?php
session_start();
require_once 'config.php';





if (isset($_POST['email']) && isset($_POST['password'])) {
    // connexion à la base de données
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);


    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $email = $_POST['email'];
    $password = $_POST['password'];


    // si les chant du formulaire ne sont pas vide on continue le processus 
    if (isset($email) && isset($password)) {

        // prepare la requete dans une variable pour appeler la donnée (1 seul ligne viendra) 

        //* signifie qu'on prend tous les élements  
        $requete = $dbname->prepare("SELECT * FROM User where email = :email ");


        // execution de la requete préparée au dessus 
        $requete->execute(["email" => $email]);


        // transformer le retour en tableau 
        //Recuperer toutes les lignes et transformer le jeu de résultats sous forme de tableau

        $reponse = $requete->fetchAll();


        // vérification du mot de passe en variable -> verifie que le hachage fourni correspond bien au mdp fourni 
        // verification de la signature 
        $verifPwd = password_verify($password, $reponse[0]['mdp']);





        // Si le mot de passe et l'émail sont bons alors on continue le processus 
        if ($verifPwd == true && ($email == $reponse[0]['email'])) // nom d'utilisateur et mot de passe correctes

        {
            // $_SESSION['email'] = $email;
            $_SESSION['id'] = $reponse[0]['idUser'];



            // Selon le traitement des données, renvoie à la page correspondante que ce soit admin et user 
            // if ($reponse[0]->type == 'admin') {
            //     header('Location: ./contact.php');

            if ($reponse[0]['type'] == 'admin') {
                header('Location: contact.php');

                // execution d'une instruction après un if dans le cas ou le if precedant est évalué comme false      
            } elseif ($reponse[0]['type'] == 'user') {
                header('Location: ./about.php');
            }


            // Selon les conditions activés redirection vers les pages correpsondantes 
        } else {
            header('Location:index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
        // Selon les conditions activés redirection vers les pages correpsondantes

    } else {
        header('Location:index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
