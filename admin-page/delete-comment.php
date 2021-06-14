<?php
    function deleteComments($commentID, $connection){
        $parentIdQuery =  "SELECT  `id` FROM  `comments` WHERE  `parent_id` IN ($commentID)"; //
        $parentId= mysqli_query($connection, $parentIdQuery);
        if( mysqli_num_rows($parentId) == 0){
            //do nothing
        } else {
            $result = mysqli_fetch_array($parentId);
            foreach ($result as &$value){
                deleteComments($value, $connection); 
            }

        }
        $del = mysqli_query($connection, "DELETE FROM `comments` where `id` = $commentID " );
        
    }
    //session_start();
        $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
        $comid=$_GET['id'];
        deleteComments($comid, $connection);      
        header('Location: ./admin-page.php#commentTable');
    
?>
