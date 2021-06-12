<?php
session_start();
// Update the details below with your MySQL details
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'pspi';
$DATABASE_PASS = 'pspi2021';
$DATABASE_NAME = 'users';
try {
    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
} catch (PDOException $exception) {
    // If there is an error with the connection, stop the script and display the error
    exit('Failed to connect to database!');
}

$loggedIn = false;
global $name;


if (isset($_SESSION['isLogged']) && isset($_SESSION['username'])) {
    $loggedIn = true;
    $name = $_SESSION['username'];
}


// This function will populate the comments and comments replies using a loop
// This function will populate the comments and comments replies using a loop
function show_comments($comments, $parent_id = -1)
{
    $html = '';
    if ($parent_id != -1) {
        // If the comments are replies sort them by the "submit_date" column
        array_multisort(array_column($comments, 'submit_date'), SORT_ASC, $comments);
    }
    // Iterate the comments using the foreach loop
    foreach ($comments as $comment) {
        global $loggedIn;
        if ($comment['parent_id'] == $parent_id) {

            if ($loggedIn) {
                // Add the comment to the $html variable
                $html .= '
            <div class="comment">
                <div>
                    <h3 class="name">' . htmlspecialchars($comment['name'], ENT_QUOTES) . '</h3>
                    <span class="date">' . ($comment['submit_date']) . '</span>
                </div>
                <p class="content">' . nl2br(htmlspecialchars($comment['content'], ENT_QUOTES)) . '</p>
                <a class="reply_comment_btn" href="#" data-comment-id="' . $comment['id'] . '">Reply</a>
                ' . show_write_comment_form($comment['id']) . '
                <div class="replies">
                ' . show_comments($comments, $comment['id']) . '
                </div>
            </div>
            ';
            } else {
                $html .= '
            <div class="comment">
                <div>
                    <h3 class="name">' . htmlspecialchars($comment['name'], ENT_QUOTES) . '</h3>
                    <span class="date">' . ($comment['submit_date']) . '</span>
                </div>
                <p class="content">' . nl2br(htmlspecialchars($comment['content'], ENT_QUOTES)) . '</p>
                <div class="replies">
                ' . show_comments($comments, $comment['id']) . '
                </div>
            </div> ';
            }
        }
    }

    return $html;
}

// This function is the template for the write comment form
function show_write_comment_form($parent_id = -1)
{
    $html = '
    <div class="write_comment" data-comment-id="' . $parent_id . '">
        <form>
            <input name="parent_id" type="hidden" value="' . $parent_id . '">
            <textarea name="content" placeholder="Write your comment here..." required></textarea>
            <button type="submit">Submit Comment</button>
        </form>
    </div>
    ';
    return $html;
}

// Page ID needs to exist, this is used to determine which comments are for which page
if (isset($_GET['page_id'])) {
    // Check if the submitted form variables exist
    if (isset($_POST['content'])) {
        // POST variables exist, insert a new comment into the MySQL comments table (user submitted form)
        $stmt = $pdo->prepare('INSERT INTO comments (page_id, parent_id, name, content, submit_date) VALUES (?,?,? ,?,NOW())');
        $stmt->execute([$_GET['page_id'], $_POST['parent_id'], $_SESSION['username'], $_POST['content']]);
        exit('Your comment has been submitted!');
    }
    // Get all comments by the Page ID ordered by the submit date
    $stmt = $pdo->prepare('SELECT * FROM comments WHERE page_id = ? ORDER BY submit_date DESC');
    $stmt->execute([$_GET['page_id']]);
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Get the total number of comments
    $stmt = $pdo->prepare('SELECT COUNT(*) AS total_comments FROM comments WHERE page_id = ?');
    $stmt->execute([$_GET['page_id']]);
    $comments_info = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    exit('No page ID specified!');
}

?>

<!--Header for showing the total number of comments and also the write comment button that can only be shown to signed in users.-->
<div class="comment_header">
    <span class="total"><?= $comments_info['total_comments'] ?> comments</span>
    <?php
    if ($loggedIn) {
        echo '<a href="#" class="write_comment_btn" data-comment-id="-1">Write Comment</a>';
    } else
        echo '<p> <a href="Register.php" style="color:white">Log in</a> or <a href="Register.php" style="color:white">Sign up</a> to write a comment!' ?>
</div>
<a href="Register.php">Log in</a>
<?= show_write_comment_form() ?>

<?= show_comments($comments, $parent_id = -1) ?>