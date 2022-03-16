<?php

require_once 'config.php';


if (isset($_POST['email']) && isset($_POST['message'])) {
    //mise en palce des specialchars en convertissant des caractères speciaux en php
    // transmission d'infos du formulaire de manière masquée avec $_post  

    // $type = htmlspecialchars($_POST['type']);
    // $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    // $nom = htmlspecialchars($_POST['nom']);
    // $prenom = htmlspecialchars($_POST['prenom']);
    // mise en place de la preparation des requetes 

    // $option = ['cost' => 12,];
    // $hash = password_hash($password, PASSWORD_BCRYPT, $option);

    //prepare la requete
    $requete = $dbname->prepare('SELECT,idContact,message,email type FROM Contact WHERE Contact = :email');
    //execute de la requete 
    $requete->execute(['email' => $email]);
    // transforme le retour en tableau 
    $reponse = $requete->fetchAll();
    // verification du mot de passe en variable 
    $verifUser = count($reponse);


    if ($verifUser == 0) {
        // verification si l'urilisateur existe
        // UTILISATION DE LA REQUETE INSERT AFIN DE RECUPERER LES DONNÉES QU'ON A REMPLI 
        // en donnant des valeurs en variables données     

        $requeteInsertion = "INSERT INTO Contact (idContact,message,email) VALUES
(  :DEFAULT,  :message, :email)";
        $array = array(
            // 'nom' => $nom,
            // 'prenom' => $prenom,


            'message' => $message,
            'email' => $email,
            // 'password' => $hash,

            // 'pseudo' => $pseudo,


        );

        //TEST 
        $requete = $dbname->prepare($requeteInsertion);
        // SI SUCCES ALORS LOGIN
        $_SESSION['login'] = 1;
        $requete->execute($array);
        header('location:inscription.php?succes');
    } else {
        // SI NON FAIL 
        $_SESSION['erreur'] = 2;
        header('location:inscription.php?erreur3');
    }
}
