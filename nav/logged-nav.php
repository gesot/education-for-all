<?php
    session_start();
    //$_SESSION['username'] = " ";
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    if(isset($_SESSION['isLogged'])){
    $id = $_SESSION['id'];
    $adminQuery = "SELECT * FROM `admin` WHERE userID='$id' LIMIT 1";
    $checkAdminQuery = mysqli_query($connection, $adminQuery);
    if($_SESSION['isLogged'] === true){
        echo "
        <li><a href=''>Welcome " .$_SESSION['username']."!"."<span class='fa fa-caret-down'></span><img src='user-profile.png' alt=''></a>
        <ul>
            <li><a href=''>Edit Profile</a></li>
            <li><a href='   ../user-interaction/logout.php'>Log-Out</a></li>" . ( mysqli_num_rows($checkAdminQuery) == 1 ? 
            "<li><a href='   ../admin-page/admin-page.php'>Admin</a> </li>" : "" ) ."
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
