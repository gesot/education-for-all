<?php
    function deleteComments($array){
        $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
        //$arraydata = implode(',',$array);
        //echo "$array </br>";
        $parentIdQuery =  "SELECT  `id` FROM  `comments` WHERE  `parent_id` IN ($array)"; //
        $parentId= mysqli_query($connection, $parentIdQuery);
        if( mysqli_num_rows($parentId) == 0){
            //echo " Last node has no children </br> ";
            //$del = mysqli_query($connection, "DELETE FROM `comments` where `id` = $array " );
            
        } else {
            //echo"joined else, ";
            $result = mysqli_fetch_array($parentId);
            foreach ($result as &$value){
                deleteComments($value); 
                //$del = mysqli_query($connection, "DELETE FROM `comments` where `id` = $value " );
                //echo "deleted comment with id, </br> $value ";
                //mysqli_close($connection);
            }

        }
        $del = mysqli_query($connection, "DELETE FROM `comments` where `id` = $array " );
        echo "deleted comment with id '$array'</br>";
        echo "</br> Exiting...";
        
    }
    //session_start();
        $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
        $comid=$_GET['id'];
        deleteComments($comid);      
    
?>
