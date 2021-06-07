<?php
    session_start();
    if(isset($_SESSION['isLogged'])){
    if($_SESSION['isLogged'] === true){
        echo "<a href='user-interaction/logout.php'>" . 'Log Out' . "</a>";
    }
    else{
        echo "<a href='Register.php'>" . 'Sign Up/ Log In' . "</a>";
    }

    }
    else{
        echo "<a href='Register.php'>" . 'Sign Up/ Log In' . "</a>";
    }
?>