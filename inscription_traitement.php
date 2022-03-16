<?php
require_once 'config.php';


if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])) {
    //mise en palce des specialchars en convertissant des caractères speciaux en php
    // transmission d'infos du formulaire de manière masquée avec $_post  

    $type = htmlspecialchars($_POST['type']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    // $nom = htmlspecialchars($_POST['nom']);
    // $prenom = htmlspecialchars($_POST['prenom']);
    // mise en place de la preparation des requetes 

    $option = ['cost' => 12,];
    $hash = password_hash($password, PASSWORD_BCRYPT, $option);

    //prepare la requete
    $requete = $dbname->prepare('SELECT,email,mdp,type FROM User WHERE User = :email');
    //execute de la requete 
    $requete->execute(['email' => $email]);
    // transforme le retour en tableau 
    $reponse = $requete->fetchAll();
    // verification du mot de passe en variable 
    $verifUser = count($reponse);


    if ($verifUser == 0) {
        // verification si l'urilisateur existe
        // UTILISATION DE LA REQUETE INSERT AFIN DE RECUPERER LES DONNÉES QU'ON A REMPLI 
        // en donnat des valeurs en variables données     

        $requeteInscription = "INSERT INTO User (type,email,mdp,pseudo) VALUES
( :type, :email, :password, :pseudo)";
        $array = array(
            // 'nom' => $nom,
            // 'prenom' => $prenom,
            'type' => $type,
            'email' => $email,
            'password' => $hash,

            'pseudo' => $pseudo,


        );

        //TEST 
        $requete = $dbname->prepare($requeteInscription);
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
