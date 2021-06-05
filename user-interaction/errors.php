<?php
    session_start();
    if (!empty($_SESSION['error'])){
?>
    <div class="alert alert-warning"> 
    <strong>Error!</strong>
    <p>
    <?php
        echo $_SESSION['error'];
        unset($_SESSION['error']);
        }
    ?>
    </p>
    </div>