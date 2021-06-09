<?php
    session_start();
    //$_SESSION['username'] = " ";
    if(isset($_SESSION['isLogged'])){
    if($_SESSION['isLogged'] === true){
        echo "
        <li><a href=''>Welcome " .$_SESSION['username']."!"."<span class='fa fa-caret-down'></span><img src='user-profile.png' alt=''></a>
        <ul>
            <li><a href=''>Edit Profile</a></li>
            <li><a href='/user-interaction/logout.php'>Log-Out</a></li>
        </ul>
        </li> 
        ";
    }
    else{
        echo "<a href='Register.php'>" . 'Sign Up/ Log In' . "</a>";
    }

    }
    else{
        echo "<a href='Register.php'>" . 'Sign Up/ Log In' . "</a>";
    }
?>
