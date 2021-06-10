<?php
    session_start();
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $errors = array();
    $_SESSION['isLogged'] = false;
    $_SESSION['isNotValid'] = false;
    $_SESSION['username'] = " ";
    $_SESSION['email'] = " ";
    if(isset($_POST['submit-login'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        //if email exists fetch encrypted password from database
        $checkPass = "SELECT * FROM `user` WHERE email='$email' LIMIT 1";
        $checkPassQuery = mysqli_query($connection, $checkPass);
        if(mysqli_num_rows($checkPassQuery) == 1){
            $result = mysqli_fetch_assoc($checkPassQuery);
            $hashedPassword = $result['password'];
            echo "$hashedPassword"."  ";
            $verify = password_verify($password, $hashedPassword);
            echo"$verify";
            if($verify){
                echo 'Signup complete ';
                $_SESSION['isLogged'] = true;
                $_SESSION['username'] = $result['username'];
                $_SESSION['email'] = $result['email'];
                header('Location: ../home.php');
            }
            else{
                $_SESSION['isNotValid'] =  true;
                header('Location: ../Register.php');
            }
        }
        else{
            $_SESSION['isNotValid'] =  true;
            header('Location: ../Register.php');
            //mail does not exist
        }

    }else{
        header('Location: ../Register.php');
    }
?>