<?php
// tirer un nombre éleatoire entre 1 et 10 
// l'utilisateur doit trouver le chiffre 

// algo 

//choisir un nombre aléatoire 
// poser la question à l'utilisateur d'écrire un chiffre 
// verifier que le chiffre donné est bon ou pas 
// et donner a l'utilisatuer une indication si le chiffre est plus grand ou plus petit que le chiffre donner par l'utilisateur 
// repeter l'operation tant que le chiffre n'est pas trouver 


// $chiffre = readline('entrer un chiffre entre 1 et 10 ');

// echo 'echo chiffre' $chiffre;



// rand();


// INITIALISATIONµ DU CARACT7RE ALEATOIRE 
$nmb = rand(1, 10);
$chiffre = readline('entrer un chiffre entre 1 et 10');

while (true) {
    $chiffre = (int)readline('entrer un chiffre entre 1 et 10');


    if ($chiffre < $nmb) {

        echo 'votre nombre est trop petit';
    } else if ($chiffre > $nmb) {
        echo 'votre nombre est trop grand';
    } else if ($chiffre == $nmb) {
        echo 'votre nombre est le bon';
        break;
    } else {
        echo 'Essayer';
    }
}


//     while (true){
//     $chiffre = (int)readline()
// }