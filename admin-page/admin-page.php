<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <link rel="stylesheet" href="../index.css">
    <?php include('../nav/navbar.php');?>
		<title>Education For All</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
			rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./admin-page.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>

<body>

<script>
//parameters 1,2 and 3 are the indices of the columns we want to search
function searchTable(id, tableToSearch, parameter1, parameter2, parameter3) {
  
  var input, filter, table, tr, td, i, txtValue, index1, index2;
  input = document.getElementById(id);
  filter = input.value.toUpperCase();
  table = document.querySelector(tableToSearch);
  tr = table.getElementsByTagName("tr");
  index1 = parseInt(parameter1);
  index2 = parseInt(parameter2);
  index3 = parseInt(parameter3);

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[index1];
    td2 = tr[i].getElementsByTagName("td")[index2];
    td3 = tr[i].getElementsByTagName("td")[index3];
    if (td || td2 || td3) {
      txtValue = td.textContent || td.innerText;
      txtValue2 = td2.textContent || td2.innerText;
      txtValue3 = td3.textContent || td3.innerText;
      if ((txtValue.toUpperCase().indexOf(filter) > -1)||(txtValue2.toUpperCase().indexOf(filter) > -1) || (txtValue3.toUpperCase().indexOf(filter) > -1)) {
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
    <?php include("./stats.php"); ?>
    </section>
<!----------END OF ROWS---------->

<!----------START OF TABLE---------->
    <section id="userTable">
    <h2 style="margin-left: 20px;">Users</h2>
    <input class="searchBox" type="text" id="userSearch" onkeyup="searchTable('userSearch', '#user-table','0' ,'1','2')" placeholder="Search...">
    <hr>
    <div class="container-fluid" style="padding-bottom:100px" >
    <div class="row">
    <div class="col-md-7" style="overflow-y: scroll;height: 400px;">  
      <table class='content-table' id = 'user-table' style='margin-left: 50px; margin-bottom: 100px;'>
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Manage</th>
        </tr>
        </thead>
        <tbody>
        <?php include("./table-users.php") ?>
        </tbody> 
      </table>
    </div>
    </div>
    </div>
    </section>

    
    <section id="commentTable">
    <h2 style="margin-left: 20px;">Comments</h2>
    <input class="searchBox" type="text" id="commentSearch" onkeyup="searchTable('commentSearch', '#comment-table','1' ,'2','3')" placeholder="Search...">
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
          </thead>
          <tbody>
          <?php include("./table-comments.php") ?>
          </tbody>
        </table>
    </div>
    </div>
    </div>
    </section>

    <section id="messageTable">
    <h2 style="margin-left: 20px;">Messages</h2>
    <input class="searchBox" type="text" id="messageSearch" onkeyup="searchTable('messageSearch', '#message-table','0','1','2')" placeholder="Search...">
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
        <?php include("./table-messages.php") ?>
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