<?php

// db connection

$connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users')or die(mysql_error());

// function to verify the existence of usernames

function isset_username($username){

global $connection;

$username = trim($username);

$query = "SELECT COUNT(*) AS num FROM user WHERE username='" .mysqli_real_escape_string($connection,$username). "'";

$result = mysqli_query($connection,$query);

$row = mysqli_fetch_array($result);

if($row['num']>=1){

return TRUE; // true if user exists

}

else{

return FALSE;

}

}


//function to verify the existence of the email

function isset_email($email){

global $connection;

$email = trim($email);

$query = "SELECT COUNT(*) AS num FROM user WHERE email='" .mysqli_real_escape_string($connection,$email). "'";

$result = mysqli_query($connection,$query);

$row = mysqli_fetch_array($result);

if($row['num']>=1){

return TRUE; // true if user exists

}

else{

return FALSE;

}

}


/*

We complete AJAX request

*/

if(isset($_POST['username'])){

if(!isset_username($_POST['username'])){

echo 'true';

}

else{

echo 'false';

}

}
else if(isset($_POST['email'])){
if(!isset_email($_POST['email'])){
echo 'true';
}
else{
echo 'false';
}
}
?>








