<?php
session_start();
    //establish connection to the sql databse
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $errors = array();
    //if statement checks if the 'create account' button has been pressed
 ?>     
 // 