<?php
session_start();

$loggedIn = false;

if (isset($_SESSION['loggedIn']) && isset($_SESSION['username'])) {
    $loggedIn = true;
}

$connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');



$sql = $connection->query("SELECT id FROM user ORDER BY id DESC LIMIT 1") or die($connection->error);
$data = $sql->fetch_assoc();
$_SESSION['userID'] = $data['id'];

/**if (isset($_POST['getAllComments'])) {
    $start = $connection->real_escape_string($_POST['start']);


    $sql = $connection->query("SELECT comments.id, username, comment, DATE_FORMAT(comments.createdOn, '%Y-%m-%d') AS createdOn FROM comments INNER JOIN user ON comments.userID = user.id ORDER BY comments.id DESC LIMIT $start, 20");
    while ($data = $sql->fetch_assoc())
        $response .= createCommentRow($data);
}**/

if (isset($_POST['addComment'])) {
    $comment = $connection->real_escape_string($_POST['comment']);

    $connection->query("INSERT INTO comments (userID, comment, createdOn) VALUES ('" . $_SESSION['userID'] . "','$comment',NOW())");
    exit('success');
}
//$sqlNumComments = $connection->query("SELECT id FROM comments");
//$numComments = $sqlNumComments->num_rows;
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="comments.css">
    <link rel="shortcut icon" href="#">
    <title>Hello, world!</title>

</head>

<body>

    <!--Add comment text field-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <textarea class="form-control" placeholder="Add Public Comment" name="" id="mainComment" cols="30" rows="1"></textarea><br>
                <button style="float:right" class="btn-primary btn" id="addComment"> Add Comment </button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><b>335 Comments</b></h2>
                <div class="userComments">
                    <div class="comment">
                        <div class="user">Senaid B <span class="time">2019-07-15</span></div>
                        <div class="userComment">this is my comment</div>
                        <div class="replies">
                            <div class="comment">
                                <div class="user">Senaid B <span class="time">2019-07-15</span></div>
                                <div class="userComment">this is my comment</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#addComment").on('click', function() {
                var comment = $("#mainComment").val();

                if (comment.length > 0) {
                    $.ajax({
                        url: 'comments.php',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            addComment: 1,
                            comment: comment
                        },
                        success: function(response) {
                            console.log(response);
                        }
                    });
                } else
                    alert('Please Check Your Inputs');
            });

        });

        //functioon that dinamically gets all comments from the database
        /**function getAllComments(start, max) {
            if (start > max) {
                return;
            }

            $.ajax({
                url: 'comments.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    getAllComments: 1,
                    start: start
                },
                success: function(response) {
                    $(".userComments").append(response);
                    //recursively getting all comments
                    getAllComments((start + 20), max);
                }
            });
        }**/
    </script>
</body>

</html>