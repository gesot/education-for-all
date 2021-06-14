<?php
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $IDUser=$_GET['userID'];
    $query = "DELETE FROM `message` WHERE `id` = $IDUser";
    $deleteMessage = mysqli_query($connection, $query);
    header('Location: admin-page.php#messageTable');
?>