<?php
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $query = "SELECT `id`,`page_id`,`name`,`content` FROM `comments` 
            ORDER BY `submit_date` DESC  ";
    $execQuery = mysqli_query($connection, $query);
    if(mysqli_num_rows($execQuery) > 0){
        while ($result = mysqli_fetch_array($execQuery)) { ?>
            <tr>
                <td> <?php echo $result[0] ?> </td>
                <td> <?php echo $result[1] ?> </td>
                <td> <?php echo $result[2] ?> </td>
                <td> <?php echo $result[3] ?> </td>
                <td><a href="user-interaction\delete-comment.php?id=<?php echo $result[0]; ?>">Delete</a></td>
             </tr>
          <?php  } 
            
  }
?>

