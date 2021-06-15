<?php
session_start();
$_SESSION['messageSent'] = false;
//establish connection to the sql databse
$connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
//evaluate connection  
if (!$connection) {
  echo 'Connection error: ' . mysqli_connect_error();
}

//write mysql query
//if statement checks if the 'create account' button has been pressed
if (isset($_POST)) {
  $name = validateData($_POST['name']);
  $email = validateData($_POST['email']);
  $phone = validateData($_POST['phonenumber']);
  $message = htmlspecialchars($_POST['message']);
  $sqlQuery = "INSERT INTO message (name, email, phone,message, reg_date) 
        VALUES ('$name', '$email', '$phone','$message', CURRENT_TIMESTAMP)";
  if (mysqli_query($connection, $sqlQuery)) {
    $_SESSION['messageSent'] = true;
    echo "New record created successfully";
    header('Location: ../ContactUs.php');
  } else {
    echo "Error: " . $sqlQuery . "<br>" . mysqli_error($connection);
  }
}

function validateData($input)
{
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}
