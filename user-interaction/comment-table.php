<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <table class='comment-table' style='margin-left: 50px; margin-bottom: 100px;'>
        <thead>
        <tr>
            <th>ID</th>
            <th>Page ID</th>
            <th>Username</th>
            <th>Comment</th>
            <th>Manage</th>
        </tr>
        </thead><tbody>
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
          <?php  } ?>
            </tbody> </table>
<?php    }
?>
</body>
</html>


