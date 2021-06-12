<?php
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $IDUser=$_GET['userID'];
    $query = "INSERT INTO admin (userID) VALUES ('$IDUser')";
    $querySetAdmin= mysqli_query($connection, $query);
?>