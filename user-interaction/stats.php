<?php

    $connection = mysqli_connect('localhost', 'pspi', 'pspi2021', 'users');

    $queryUsers = mysqli_query($connection, "SELECT COUNT(`id`) FROM `user`");
    $totalUsers = mysqli_fetch_array($queryUsers);

    $queryComments = mysqli_query($connection, "SELECT COUNT(`id`) FROM `comments`");
    $totalComments = mysqli_fetch_array($queryComments);

    $queryMessages = mysqli_query($connection, "SELECT COUNT(`id`) FROM `message`");
    $totalMessages = mysqli_fetch_array($queryMessages);

    echo"
    <div class='container-fluid' name='plain-header' style='margin-top: 1em; padding: 5em'>
      <div class='row align-items-center'>
        <div class='col-md-1'>
        </div>
        <div class='col-md-3'>
        <div class='stat-box'>

        <div class='container-fluid'>
        <div class='row'>
        <div class='col-md-7' >
          <h3>Total Users</h3>
          <div class='content'>
              <p>
                  $totalUsers[0]
              </p>
          </div>

          </div>
          <div class='col-md-5' >
            <img src='images\icons\user.png' >  
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class='col-md-4'>
        <div class='stat-box'>
          <div class='container-fluid'>
            <div class='row'>
            <div class='col-md-7' >
              <h3> Comments</h3>
              <div class='content'>
                  <p>
                      $totalComments[0]
                  </p>
              </div>
    
              </div>
              <div class='col-md-5' >
                <img src='images\icons\comment.png' >  
                </div>
              </div>
          </div>
        </div>
        </div>

        <div class='col-md-3'>
        <div class='stat-box'>
          <div class='container-fluid'>
            <div class='row'>
            <div class='col-md-7' >
              <h3> Messages</h3>
              <div class='content'>
                  <p>
                      $totalMessages[0]
                  </p>
              </div>
    
              </div>
              <div class='col-md-5' >
                <img src='images\icons\message.png' >  
                </div>
              </div>
          </div>
          </div>
        </div>
        <div class='col-md-1'>
        </div>
      </div>
    </div>
    ";
?>