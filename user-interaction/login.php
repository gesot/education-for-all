<?php
    session_start();
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $errors = array();
    $_SESSION['isLogged'] = false;
    if(isset($_POST)){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        //if email exists fetch encrypted password from database
        $checkPass = "SELECT * FROM `user` WHERE email='$email' LIMIT 1";
        $checkPassQuery = mysqli_query($connection, $checkPass);
        if(mysqli_num_rows($checkPassQuery) == 1){
            echo 'email exists ';
            $result = mysqli_fetch_assoc($checkPassQuery);
            $hashedPassword = $result['password'];
            $verify = password_verify($password, $hashedPassword);
            if($verify){
                echo 'Signup complete ';
            $_SESSION['isLogged'] = true;
            header('Location: /home.php');
            }
        }
        else{
            //mail does not exist
        }

    }
?>