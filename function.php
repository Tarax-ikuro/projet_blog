<?php
session_start();
include('config.php');
function setSession($reponse)
{

    $_SESSION['pseudo'] = $reponse[0]->pseudo;
    $_SESSION['id'] = $reponse[0]->iduser;
    $_SESSION['nom'] = $reponse[0]->nom;
    $_SESSION['prenom'] = $reponse[0]->prenom;
    $_SESSION['type'] = $reponse[0]->type;
}

// FONCTION ENVOYER UN MESSAGE DE CONTACT 
function sendMessage()
{

    include('config.php');
    $email = $_POST['email'];
    $message = $_POST['message'];
    $dateTime = $_POST['dateTime'];


    // MISE EN PLACE d'une insertion 
    $requete = "INSERT INTO message ($idContact, $message,$dateTime) VALUES
(DEFAULT,'message','dateTime')";



    $_SESSION['erreur'] = 1;

    header('Location: index.php');
}
