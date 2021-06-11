<?php
    function deleteComments(&$array){
        $parentIdQuery =  "SELECT  `id` FROM  `comments` WHERE  `parent_id` =  $comid "; //
        $parentId= mysqli_query($connection, $parentIdQuery);
        if( mysqli_fetch_array($parentId)== false){
            exit;
        } else {
            $result = mysqli_fetch_array($parentId);
            foreach ($result as &$value){
                deleteComment(mysqli_fetch_array($parentId)); 
            }

        }
        $del = mysqli_query($connection, "DELETE FROM `comments` where `id` = $value " );
    }
    //session_start();
        $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
        $comid=$_GET['id'];
        $parentIdQuery =  "SELECT  `id` FROM  `comments` WHERE  `parent_id` =  $comid "; //
        $parentId= mysqli_query($connection, $parentIdQuery);
        $result =  mysqli_fetch_array($parentId);
        foreach ($result as &$value){
            $del = mysqli_query($connection, "DELETE FROM `comments` where `id` = $value " );
        }
        $deleteQuery = "DELETE FROM `comments` where `id` = $comid";
        $delete = mysqli_query($connection, $deleteQuery);
        if($delete)
        {
            mysqli_close($connection); // Close connection
            header('Location: /admin-page.php'); 
            	
        }
    
?>
