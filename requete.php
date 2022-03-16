<?php
function popArticle($pdo, $where)
{
    // $i = filter_input(INPUT_GET, "id");
    // include './common/connexion.php';

    //prepare la requete avec en utilisant la requete SELECT ,COUNT ,as counter, LEFT JOIN,WHERE,GROUP BY, 
    // SELECT ...FROM -> selectionner tous  les chants provenant (FROM) du tableau "nomb du tableau"
    //COUNT() est une fonction d'agregation permettant de compter le nombre d'enregistrement dans une table donc connaitre le nombre de ligne
    // LEFT JOIN est une jointure entre 2 tables permettant de lister tous les résultas d'une table à gauche meme si il n'y a pas  de correspondances dans la deuxième tabes  

    $stmt = $pdo->prepare("SELECT Article.*, User.*, Categorie.*, COUNT(Commentaire.idArticle) as counter 
    FROM Article LEFT JOIN commentaire ON commentaire.idArticle = article.idArticle LEFT JOIN user
    ON article.idUser = users.idUser LEFT JOIN categorie ON article.idCategorie = categorie.idCategorie
    WHERE {$where['sql']}
    GROUP BY article.idArticle");

    $stmt->execute(array($where['id']));

    return $stmt;
}
function popLastArticle($pdo, $limit)
{
    $stmt = $pdo->prepare("SELECT * FROM Article  ORDER BY dateTime DESC LIMIT {$limit['sql']}");
    $stmt->execute();
    return $stmt;
}


function addCommentArticle($pdo, $insert)
{
    $stmt = $pdo->prepare("INSERT INTO Commentaire (idCommentaire, commentaire, pseudo, status, dateSend, idUsers, idArticle) VALUES
    (DEFAULT, '{$insert['sql1']}', '{$insert['sql2']}', DEFAULT, DEFAULT, '{$insert['sql3']}', '{$insert['sql4']}')");
    $stmt->execute();

    return $stmt;
}

function popCom($pdo, $idarticle)
{
    // $i = filter_input(INPUT_GET, "id");
    // include './common/connexion.php';
    $stmt = $pdo->prepare("SELECT * FROM Commentaire WHERE idArticle = {$idarticle['sqlCom']} AND status = true");

    $stmt->execute();

    return $stmt;
}


function user($pdo)
{
    // $i = filter_input(INPUT_GET, "id");
    // include './common/connexion.php';
    $stmt = $pdo->prepare("SELECT * FROM User WHERE 1");

    $stmt->execute();

    return $stmt;
}
function contact($pdo)
{
    // $i = filter_input(INPUT_GET, "id");
    // include './common/connexion.php';
    $stmt = $pdo->prepare("SELECT * FROM message WHERE 1");

    $stmt->execute();

    return $stmt;
}
