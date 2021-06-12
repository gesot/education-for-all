<?php

    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $IDUser=$_GET['userID'];
    $query = "DELETE FROM `user` WHERE `id` = $IDUser";
    $setAdmin = mysqli_query($connection, $query);
?>