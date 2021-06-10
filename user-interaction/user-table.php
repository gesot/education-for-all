<?php
    
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $query = "SELECT `id`,`username`,`email` FROM `user` 
              ORDER BY `reg_date` DESC  ";
    $execQuery = mysqli_query($connection, $query);
    if(mysqli_num_rows($execQuery) > 0){
        echo " <table class='content-table' style='margin-left: 50px; margin-bottom: 100px;'>
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
        </thead><tbody>";
        while ($result = mysqli_fetch_array($execQuery, MYSQLI_NUM)) {
            
            echo "<tr>
                    <td>$result[0]</td>
                    <td>$result[1]</td>
                    <td>$result[2]</td>
                 </tr>";
        }
        echo "</tbody> </table>";
    }
?>