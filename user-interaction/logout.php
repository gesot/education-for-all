<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    $_SESSION['isLogged'] = false;
    header('Location: ../Register.php');
?>
