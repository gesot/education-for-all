<?php
    
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $query = "SELECT `id`,`page_id`,`name`,`content` FROM `comments` 
              ORDER BY `submit_date` DESC  ";
    $execQuery = mysqli_query($connection, $query);
    if(mysqli_num_rows($execQuery) > 0){
        echo " <table class='comment-table' style='margin-left: 50px; margin-bottom: 100px;'>
        <thead>
        <tr>
            <th>ID</th>
            <th>Page ID</th>
            <th>Username</th>
            <th>Comment</th>
            <th>Manage</th>
        </tr>
        </thead><tbody>";
        while ($result = mysqli_fetch_array($execQuery, MYSQLI_NUM)) {
            
            echo "<tr>
                    <td>$result[0]</td>
                    <td>$result[1]</td>
                    <td>$result[2]</td>
                    <td>$result[3]</td>
                    <td><a href='delete-comment.php?id=<?php echo $result[0]; ?>'>Delete</a></td>
                 </tr>";
        }
        echo "</tbody> </table>";
    }
?>