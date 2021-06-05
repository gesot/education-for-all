<?php   
    //establish connection to the sql databse
   $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
  //evaluate connection  
  if (!$connection){
    echo 'Connection error: ' . mysqli_connect_error();
  }

    //write mysql query
   // $sqlQuery = "INSERT INTO `user` (`username`, `email`, `password`, `create_time`) 
             //   VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
    //if statement checks if the 'create account' button has been pressed
    if(isset($_POST)){    
        $username = validateData($_POST['username']);
        $email = validateData($_POST['email']);
        $password = validateData($_POST['password']);
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
       
        
        //must check if email and username already exist
        //prepare query
     //   $prep = $connection->prepare($sqlQuery);
        //bind params
      //  $prep->bind_param("sss", $username, $email, $password);
        //execute 
      //  $prep->execute();
    }
    //do some other stuff here

    function validateData($input){
      $input = trim($input);
      $input = stripslashes($input);
      $input = htmlspecialchars($input);
      echo("$input");
      return $input;
    }


?>