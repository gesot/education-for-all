<?php   
    //establish connection to the sql databse
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    //write mysql query
    $sqlQuery = "INSERT INTO `user` (`username`, `email`, `password`, `create_time`) 
                 VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
    //if statement checks if the 'create account' button has been pressed
    if(isset($_POST)){

        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        //must check if email and username already exist
        //prepare query
        $prep = $connection->prepare($sqlQuery);
        //bind params
        $prep->bind_param("sss", $username, $email, $password);
        //execute 
        $prep->execute();
    }
    //do some other stuff here

?>