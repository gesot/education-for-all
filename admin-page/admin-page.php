<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Education For All</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../nav/navbar.php');?>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
			rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="admin-page.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>

<body>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.querySelector(".content-table");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    td2 = tr[i].getElementsByTagName("td")[1];
    if (td || td2) {
      txtValue = td.textContent || td.innerText;
      txtValue2 = td2.textContent || td2.innerText;
      if ((txtValue.toUpperCase().indexOf(filter) > -1)||(txtValue2.toUpperCase().indexOf(filter) > -1)) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<!----------START OF ROWS---------->
    <section class="stats" id="stats">
    <?php include("stats.php"); ?>
    </section>
<!----------END OF ROWS---------->

<!----------START OF TABLE---------->
    <section id="userTable">
    <h2 style="margin-left: 20px;">Users</h2>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search id/name...">
    <hr>
    <div class="container-fluid" style="padding-bottom:100px" >
    <div class="row">
    <div class="col-md-7" style="overflow-y: scroll;height: 400px;">  
    <?php include("table-users.php") ?>
    </div>
    </div>
    </div>
    </section>

    
    <section id="commentTable">
    <h2 style="margin-left: 20px;">Comments</h2>
    <hr>
    <div class="container-fluid" style="padding-bottom:100px" >
    <div class="row">
    <div class="col-md-12" style="overflow-y: scroll;height: 400px;">  
        <table class='content-table' id="comment-table" style='margin-left: 50px; margin-bottom: 100px;'>
        <thead>
        <tr>
            <th>ID</th>
            <th>Page ID</th>
            <th>Username</th>
            <th>Comment</th>
            <th>Manage</th>
        </tr>
        </thead><tbody>
        <?php include("table-comments.php") ?>
        </tbody> 
      </table>
    </div>
    </div>
    </div>
    </section>

    <section id="messageTable">
    <h2 style="margin-left: 20px;">Messages</h2>
    <hr>
    <div class="container-fluid" style="padding-bottom:100px" >
    <div class="row">
    <div class="col-md-12" style="overflow-y: scroll;height: 400px;">  
        <table class='content-table' id="message-table" style='margin-left: 50px; margin-bottom: 100px;'>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Message</th>
            <th>Manage</th>
        </tr>
        </thead>
        <tbody>
        <?php include("table-messages.php") ?>
        </tbody> 
      </table>
    </div>
    </div>
    </div>
    </section>
    

<!----------END OF TABLE---------->

<!----------START OF FOOTER----------->
<footer>
<?php include('../nav/footer.php');?>
</footer>
    <!----------END OF FOOTER---------->

    <!----------START OF <TOP> BUTTON---------->
		<a href="#"><i class="gotopbtn" href="#"><i class="fa fa-arrow-circle-up"></i></i></a>
	<!----------END OF TOP BUTTON---------->
</body>
</html>