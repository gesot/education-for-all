<?php
    
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $query = "SELECT `id`,`username`,`email` FROM `user` 
              ORDER BY `reg_date` DESC  ";
    $execQuery = mysqli_query($connection, $query);
    if(mysqli_num_rows($execQuery) > 0){
        echo " <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
    </thead>";
        while ($result = mysqli_fetch_array($execQuery, MYSQLI_NUM)) {
            
            //printf("username: %s  email: %s", $result[0], $result[1]);
            echo "<tbody>
            <tr>
                <td>$result[0]</td>
                <td>$result[1]</td>
                <td>$result[2]</td>
            </tr>
            </tr>
            ";
            //echo "</br>";
        }
        echo "</tbody>";
    }
?>