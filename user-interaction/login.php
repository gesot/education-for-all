<?php
    //boolean isAdmin on user table
    //or a seperate 'admin' table?
    //we must update the navbar after the login through the nabar.php file, maybe with intergrated php using the
    //session variable
    session_start();
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $errors = array();
    $_SESSION['isLogged'] = false;
    if(isset($_POST)){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $checkUserQuery = "SELECT * FROM `user` WHERE email='$email' AND password='$password' LIMIT 1";
        $result = mysqli_query($connection, $checkUserQuery);
        if(mysqli_num_rows($result) == 1){
            echo 'Signup complete ';
            $_SESSION['isLogged'] = true;
            header('Location: /home.php');
        }
        else{
            echo 'error';
        }
        //check if user credentials are in the database else throw error
            //if user exists, search in the admin database
                //if admin, show admin page
                //if user, show user profile  
    }
?>