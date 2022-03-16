<?php
session_start();





//CONNEXION A LA BASE DE DONEES

try {
    $dbname = new PDO('mysql:host=localhost;dbname=repas', 'ARIAS', 'ARIAS');
} catch (Exception $e) {
    die('could not connect to database' . $e->getMessage());
}
