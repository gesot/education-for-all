<?php
session_start();
$_SESSION['username'] = " ";
//establish connection to the sql databse
$connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
$_SESSION['isLogged'] = false;
//evaluate connection  
if (!$connection) {
  echo 'Connection error: ' . mysqli_connect_error();
}

if (isset($_POST)) {
  $username = validateData($_POST['username']);
  $email = validateData($_POST['email']);
  $password = validateData($_POST['password']);
  $password_hash = password_hash($password, PASSWORD_BCRYPT);
  $sqlQuery = "INSERT INTO user (username, email, password, reg_date) 
        VALUES ('$username', '$email', '$password_hash', CURRENT_TIMESTAMP)";
  if (mysqli_query($connection, $sqlQuery)) {
    echo "New record created successfully";
    $_SESSION['isLogged'] = true;
    $_SESSION['username'] = $username;
    header('Location: ../home.php');
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
?>
