<?php
    session_start();
    echo 'loggin out';
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    $_SESSION['isLogged'] = false;
    header('Location: /home.php');
?>