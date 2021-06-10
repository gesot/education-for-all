<?php
    //session_start();
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM `comments` where `id` =  `$id`";
    $delete = mysqli_query($connection, $deleteQuery);
        
    if($del)
    {
        mysqli_close($db); // Close connection
        header("location:all_records.php"); // redirects to all records page
        exit;	
    }
el
?>