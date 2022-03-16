<?php

session_start();

if (isset($POST['sendMessage'])) {
    if (htmlspecialchars(filter_input(INPUT_POST, 'message')) && filter_input(INPUT_POST, 'email')) {
        sendMessage();
    } else {
        $_SESSION['erreur'] = 2;
    }
    header('location:./index.php?page=contact');
}
