<?php
require_once 'config.php';

if (
    isset($_POST['idArticle']) && isset($_POST['contenu']) && isset($_POST['image']) && isset($_POST['dateTime'])
    && isset($_POST['updateTime']) && isset($_POST['updateDate']) && isset($_POST['idCategorie']) && isset($_POST['idUser']) && isset($_POST['titre'])
) {
    // }
    // transimission des infos du formulaire 
    $titre = htmlspecialchars($_POST['titre']);
    // $contenu = htmlspecialchars($_POST['contenu']);
    // $image = htmlspecialchars($_POST['image']);
    // $dateTime = htmlspecialchars($_POST['dateTime']);
    // $updateTime = htmlspecialchars($_POST['updateTime']);
    $idCategorie = htmlspecialchars($_POST['idCategorie']);
    // $upDate = htmlspecialchars($_POST['upDate']);
    $idUser = htmlspecialchars($_POST['idUser']);

    // prepare la requete 
    // $requeteAdd = ("INSERT INTO Article(titre,contenu,image,dateTime,updateTime,upDate,idCategorie) VALUES
    // (:titre, :contenu, :image, :dateTime, :updateTime, :updateDate))");

    // On prepare la requete en utilisant "INSERT INTO" on insert tout d'abord les données correpondantes avec une requete directement dans php my admin puis en lui donnat des valeurs en variables données


    // prepare la requete 
    // on crée une requete qu'on nomme Add on l'egalise à notre base de donée nommé $dbname.
    $requeteAdd = $dbname->prepare("INSERT INTO Article (titre,idCategorie,idUser) VALUES (:titre, :idCategorie,:idUser)");

    // on execute la requete crée precedemment  
    $requeteAdd->execute();


    // $array = array(
    //     'titre' => $titre,
    //     // 'contenu' => $contenu,
    //     // 'image' => $image,
    //     // 'dateTime' => $dateTime,
    //     // 'updateTime' => $updateTime,
    //     // 'idcategorie' => $idcategorie,
    //     // 'upDate' => $upDate,
    //     // 'idUser' => $idUser,

    // );




    // // TEST
    // $requete = $dbname->prepare($requeteAdd);
    // $requete->execute($array);
}
