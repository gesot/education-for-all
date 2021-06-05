<?php  
    session_start();
    //establish connection to the sql databse
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $errors = array();
    //if statement checks if the 'create account' button has been pressed
    if(isset($_POST)){

        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        //must check if email and username already exist
        $checkUserQuery = "SELECT * FROM `user` WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($connection, $checkUserQuery);

        if($result){
            echo 'Error detected';
            $user_exists = mysqli_fetch_assoc($result);
            if( $user_exists['username'] === $username){
                //array_push($errors, "Username already exists");
                $_SESSION['error'] = 'Username already exists';
                header('location:errors.php');
                exit;
            }
            if ($user_exists['email'] === $email) {
                //array_push($errors, "email already exists");
                $_SESSION['error'] = 'Email already exists';
                header('location:errors.php');
                exit;
            }
        }
        if(count($errors) == 0){
            $password_en = md5($password);
            //write mysql query
            $sqlQuery = "INSERT INTO `user` (`username`, `email`, `password`, `create_time`)  VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
            //prepare query
            $prep = $connection->prepare($sqlQuery);
            //bind params
            $prep->bind_param("sss", $username, $email, $password);
            //execute 
            $prep->execute();
            echo 'Signup complete ';
        }
        
        
    }
    //do some other stuff here

?>